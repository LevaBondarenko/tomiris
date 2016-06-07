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
//Route::get('admin/',array('as' => 'admin', 'uses' => 'HomeController@index') );

Route::get('login', function (){
    return view('auth.login');
}, array('as'=>'login'));


Route::get('auth/',array( 'uses' => 'Controller@Auth'));

//Route::post('admin/save',array('as' => 'save', 'uses' => 'HomeController@upload') );
Route::get('register', function (){
    return view('home');
});





Route::get('admin/',array('as' => 'admin', 'uses' => 'Controller@allNews') );
Route::get('admin/news/delete/{id}',array('as' => 'adminDelete', 'uses' => 'Controller@DeleteNews') );
Route::get('admin/news/update/{id}',array('as' => 'adminUpdate', 'uses' => 'Controller@UpdateNews') );
Route::post('admin/news/update/save',array('as' => 'adminUpdateSave', 'uses' => 'Controller@SaveNews') );
Route::post('admin/save',array('as' => 'save', 'uses' => 'Controller@upload') );


