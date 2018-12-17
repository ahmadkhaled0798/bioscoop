<?php

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

use App\User;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home1', 'HomeController@index1')->name('home1');
Route::get('/films', 'FilmController@index')->name('film');

Route::get('/contact' , function (){
    return view('contact');
});

Route::get('/mix' , function (){
    return view('mix');
});

Route::get('/faq' , function (){
    return view('faq');
});


Route::get('/privacy' , function () {
    return view('privacy');
});
Route::get('/test' , function ()
{
    return view('testapi1');
});

Route::get('/dbtest' , function ()
{
    return User::all();
});

