<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

// //direct return
// Route::get('/hello', function(){
//     return 'Hello Laravel';
// });

// //from view
// Route::get('/about', function(){
//     return view('AboutPage');
// });

// //from controller
// Route::get('/contact', 'HomeController@Contact');

// //from controller than controller return view
// Route::get('/about', 'HomeController@About');

Route::get('/', 'HomeController@Home');
Route::get('/about', 'HomeController@About');
Route::get('/contact', 'HomeController@Contact');

//Route::get('/name/{name}', 'HomeController@Name');

Route::get('/text/{first}/{last}', 'HomeController@Text');

Route::get('/name/{firstName}/{middleName}/{lastName}', 'HomeController@FullName');

Route::group(['prefix' => 'admin'], function(){

    Route::get('/register', function(){
        return "Register";
    });
    
    Route::get('/login', function(){
        return "LogIn";
    });
    
    Route::get('/logout', function(){
        return "LogOut";
    });
});

Route::get('/my','myController');

Route::resource('photos','PhotoController');

Route::resource('video','VideoController');