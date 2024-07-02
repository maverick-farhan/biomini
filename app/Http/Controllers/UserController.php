<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        // $details = DB::table('details')
        // ->join('users','details.user_id','=','users.id')
        // ->get();
        // $details = Detail::all();
        $detail = Detail::where('user_id','=',Auth::user()->id)->get();
        // return $detail;
        return view('welcome',compact('detail'));
    }
    public function signup()
    {
        return view('signup');
    }
    public function login()
    {
        return view('login');
    }
    public function signupUser(Request $req){

        $req->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed|alpha_num|min:8',
        ]);

        $user = User::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>$req->password,
        ]);
        if($user){
            return redirect()->route('login');
        }
    }
    public function loginUser(Request $req){
        $data = Auth::user();
        $credentials = $req->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        if(Auth::attempt($credentials)){
            return redirect()->route('welcome');
        }
        else{
            return redirect()->route('login')->with('status',"Login credentials does'nt match our record");
        }
    }
    public function logoutUser(){
        Auth::logout();
        return redirect()->route('home');
    }

    public function links_view(User $user){
        $url = url('biominiView/'.$user->id);
        $detail = Detail::where('user_id','=',$user->id)->get();
        foreach ($detail as $value) {
        $url = url('biominiView/'.$value->id);
        }

        if(Auth::user() && $detail){
            return view('biominilinks',compact('detail'),compact('url'));
        }
        else{
            return redirect()->route('welcome',compact('detail'));
        }
    }
    public function settingView(string $userID){
        $user = User::find($userID);
        if($user->id === Auth::user()->id){
            return view('settings',compact('user'));    
        }
        else{
            return redirect()->route('welcome');
        }
    }
    public function updateUser(Request $req, string $user){
        $user = User::find($user);
        $user->name = $req->name;
        $user->email = $req->email;
        $user->save();
        return redirect()->route('welcome');
    }


}
