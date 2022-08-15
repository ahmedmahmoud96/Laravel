<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('User','NameController');

Route::get('profile',function (){
 return   view('profile.index');
});


Route::get('about',function (){
    return   view('profile.about');
})->name('about');



Auth::routes(["verify" => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
Route::get('auth/facebook', 'SocialAuthController@facebookLogin');

Route::get('redirect/{service}','SocController@redirect');
Route::get('callback/{service}','SocController@callback');
