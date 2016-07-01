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

Route::get('/', 'ContentController@index');
Route::get('/news', 'Controller@NewsPage');
Route::get('/hotel', 'Controller@HotelPage');
Route::get('/restaurant', 'Controller@RestaurantPage');
Route::get('/loungebar', 'Controller@LoungePage');
Route::get('/contacts', 'Controller@ContactsPage');
Route::get('/sauna', function(){
    return view('pages.sauna');
});

Route::get('login', function (){
    return view('auth.login');
}, array('as'=>'login'));


Route::get('auth/',array( 'uses' => 'Controller@Auth'));






//Роуты админа

Route::get('admin/',array('as' => 'admin', 'uses' => 'Controller@allNews','middleware'=>'auth') );
Route::get('login/',array('as' => 'login', 'uses' => 'Auth\AuthController@getLogin') );
Route::post('login/',array('as'=>'postLogin','uses' => 'Auth\AuthController@postLogin') );
Route::get('logout/',array('as'=>'logout','uses' => 'Auth\AuthController@logout') );
Route::post('admin/save',array('as' => 'save', 'uses' => 'Controller@upload') );


Route::post('register/save','Auth\AuthController@create');
Route::get('admin/news/delete/{id}',array('as' => 'adminDelete', 'uses' => 'Controller@DeleteNews','middleware'=>'auth') );
Route::get('admin/news/update/{id}',array('as' => 'adminUpdate', 'uses' => 'Controller@UpdateNews','middleware'=>'auth') );
Route::post('admin/news/update/save',array('as' => 'adminUpdateSave', 'uses' => 'Controller@SaveNews','middleware'=>'auth') );
Route::post('admin/save',array('as' => 'save', 'uses' => 'Controller@upload','middleware'=>'auth') );
Route::get('admin/head', array('as' => 'head', 'uses' => 'ContentController@RecordContent','middleware'=>'auth') );
Route::post('admin/head/save', array('as' => 'head-save', 'uses' => 'ContentController@RecordContentSave','middleware'=>'auth') );
Route::get('/getRequest',function(){
    if(\Illuminate\Support\Facades\Request::ajax()){
        return 'getRequest';
    }
});

//end