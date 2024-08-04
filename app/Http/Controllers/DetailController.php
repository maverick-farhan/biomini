<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class DetailController extends Controller
{


    public function biominiView(string $id){
        // $url = route('biomini'); 

        $details = DB::table('details')
        ->join('users','details.user_id','=','users.id')
        ->get();

        //Commented some lines of code because final result should accessible to non users also and not just authorised users.
        // $detail = DB::table('details')->find(Auth::id());
        $detail = DB::table('details')->find($id);
        // if(Auth::user()->id!==$user->id){
            // return redirect()->route('welcome');
        // }
        // else{
            return view('biomini',compact('detail'));
        // }
    }
    
    public function biomini_creator(User $user){
        if(Auth::user()->id!==$user->id){
            return redirect()->route('welcome');
        }
        else{
        return view('build',['user',Auth::id()]);
        }
    }

    public function createBiolink(Request $req){
        $data = Detail::where('user_id','=',Auth::id())->get();
        if(!empty($req->file('image'))){
        $image = $req->file('image');
        $image_ext = $image->getClientOriginalExtension();
        $imagerandomName = date('Ymdhis').Str::random(10);
        $imagename = strtolower($imagerandomName).'.'.$image_ext;
        $image->move('images/',$imagename);
        }

        if(!empty($req->file('resume'))){
        $resume = $req->file('resume');
        $resume_ext = $resume->getClientOriginalExtension();
        $resumerandomName = date('Ymdhis').Str::random(10);
        $resumename = strtolower($resumerandomName).'.'.$resume_ext;
        $resume->move('resume/',$resumename);
        }
        
        // $req->validate([
        //     'image'=>'required|image|mimes:png,jpg,jpeg',
        //     'name'=>'required',
        //     'profession'=>"required",
        //     'email'=>'required|email',
        //     'phone'=>'required|size:10',
        //     'short_bio'=>"required|max:200",
        //     'interest'=>'required|max:100',
        //     'website'=>'required|url',
        //     'portfolio'=>'required|url',
        //     'insta'=>'required|url',
        //     'facebook'=>"required|url",
        //     'twitter'=>'required|url',
        //     'linkedin'=>'required|url',
        //     'resume'=>'required|mimes:pdf',
        // ]);

        if($data->count()<=0){
        $detail = DB::table('details')
        ->insert([
            'name'=>trim($req->name),
            'user_id'=>Auth::user()->id,
            'image'=>$imagename,
            'profession'=>trim($req->profession),
            'email'=>trim($req->email),
            'phone'=>trim($req->phone),
            'short_bio'=>trim($req->short_bio),
            'interest'=>trim($req->interest),
            'website'=>trim($req->website),
            'portfolio'=>trim($req->portfolio),
            'insta'=>trim($req->ig),
            'facebook'=>trim($req->fb),
            'twitter'=>trim($req->twitter),
            'linkedin'=>trim($req->ldin),
            'resume'=>$resumename,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        // $detail = Detail::where('user_id','=',Auth::user()->id)->get();
        foreach($data as $d){
            if($detail){
                return redirect()->route("biomini",compact('detail,d'))->with('status','Congratulation for your biomini link is created successfully.');
                }          
                else{
                    return redirect()->route('welcome')->with('status',"One User can make only one biolink as of now.");
                }
        }
    }
    return redirect()->route('welcome')->with('status',"One User can make only one biolink as of now.");
    }

    public function delete_links(string $id){
        $detail = Detail::find($id);
        $imagefilepath = public_path('images/'.$detail->image);
        $resumefilepath = public_path('resume/'.$detail->resume);

    if(file_exists($imagefilepath) && file_exists($resumefilepath)) {
        @unlink($imagefilepath);
        @unlink($resumefilepath);
        $detail->delete();
        return redirect()->route('welcome')->with('status','Your Biomini link successfully deleted');
    }
        $detail->delete();
    return redirect()->route('welcome')->with('status','Your Biomini link successfully deleted');

}
public function update_links(string $id){
    $detail = Detail::find($id);
    return view('update_link',compact('detail'));
}

public function updating(Request $req,string $id){
    $detail = Detail::find($id);
    $imagefilepath = public_path('images/'.$detail->image);
    $resumefilepath = public_path('resume/'.$detail->resume);

if(file_exists($imagefilepath) && file_exists($resumefilepath)) {
    @unlink($imagefilepath);
    @unlink($resumefilepath);
}
$image = $req->file('image');
$image_ext = $image->getClientOriginalExtension();
$imagerandomName = date('Ymdhis').Str::random(10);
$imagename = strtolower($imagerandomName).'.'.$image_ext;
$image->move('images/',$imagename);

$resume = $req->file('resume');
$resume_ext = $resume->getClientOriginalExtension();
$resumerandomName = date('Ymdhis').Str::random(10);
$resumename = strtolower($resumerandomName).'.'.$resume_ext;
$resume->move('resume/',$resumename);

$data = Detail::where('user_id','=',Auth::id())->get();
$id = $data[0]->id;
if($data->count()===1){
    $detail = DB::table('details')
    ->where('id','=',$id)
    ->update([
        'name'=>trim($req->name),
        'user_id'=>Auth::user()->id,
        'image'=>$imagename,
        'profession'=>trim($req->profession),
        'email'=>trim($req->email),
        'phone'=>trim($req->phone),
        'short_bio'=>trim($req->short_bio),
        'interest'=>trim($req->interest),
        'website'=>trim($req->website),
        'portfolio'=>trim($req->portfolio),
        'insta'=>trim($req->ig),
        'facebook'=>trim($req->fb),
        'twitter'=>trim($req->twitter),
        'linkedin'=>trim($req->ldin),
        'resume'=>$resumename,
        'created_at'=>now(),
        'updated_at'=>now()
    ]);
    foreach($data as $d){
        if($detail){
            return redirect()->route("biomini",['user' => $d->id, 'detail' => $detail])->with('status','Congratulation for your biomini link is updated successfully.');
        }          
    }
}

}

}
