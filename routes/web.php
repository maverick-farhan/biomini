<?php

use App\Http\Controllers\DetailController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\ValidUser;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('/welcome/build', function () {
//     return view('build');
// })->name('builder');

// Route::get('/biomini', function () {
//     return view('biomini');
// });

Route::get('/signup',[UserController::class,'signup'])->name('signup');
Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/signupUser',[UserController::class, 'signupUser'])->name('signup.user');
Route::post('/loginUser',[UserController::class, 'loginUser'])->name('login.user');
Route::get('/logout',[UserController::class,'logoutUser'])->name('logout');


Route::get('/settings/{userID}',[UserController::class,'settingView'])
->name('settings')
->middleware(ValidUser::class);

Route::put('/updateSettings/{user}',[UserController::class,'updateUser'])
->name('update')
->middleware(ValidUser::class);

Route::get('/welcome',[UserController::class,'index'])
->name('welcome')
->middleware(ValidUser::class);

Route::get('/biomini-creator/{user}',[DetailController::class,'biomini_creator'])
->name('creator')
->middleware(ValidUser::class);

Route::get('/biominiView/{user}',[DetailController::class,'biominiView'])
->name('biomini');
// ->middleware(ValidUser::class);

Route::post('/build',[DetailController::class,'createBiolink'])
->name('building')
->middleware(ValidUser::class);

Route::get('/mybiolinks/{user}',[UserController::class,"links_view"])
->name('links')
->middleware(ValidUser::class);

Route::get('/delete_link/{id}',[DetailController::class,'delete_links'])
->name('delete')
->middleware(ValidUser::class);

Route::get('/update_link/{id}',[DetailController::class,'update_links'])
->name('update')
->middleware(ValidUser::class);

Route::put('/updated/{user}',[DetailController::class,'updating'])
->name('updated')
->middleware(ValidUser::class);

Route::fallback(function () {
    return "<h1>Can't Find Anything for you :(</h1>";
});