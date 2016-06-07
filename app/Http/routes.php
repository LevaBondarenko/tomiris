<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Controller@LatestNews');
Route::get('admin/',array('as' => 'admin', 'uses' => 'HomeController@index') );

Route::get('login', function (){
    return view('auth.login');
}, array('as'=>'login'));


Route::get('auth/',array( 'uses' => 'Controller@Auth'));

Route::post('admin/save',array('as' => 'save', 'uses' => 'HomeController@upload') );
Route::get('register', function (){
    return view('home');
}, array('as'=>'reg'));





Route::get('admin/',array('as' => 'admin', 'uses' => 'Controller@allNews','middleware'=>'auth') );
Route::post('admin/save',array('as' => 'save', 'uses' => 'Controller@upload') );


