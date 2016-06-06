<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Auth\Access\Response;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Input;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Validator;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
   
    public function LatestNews()
    {

        $news = News::orderBy('id','desc')
            ->take(3)
            ->get();

        return \Illuminate\Support\Facades\View::make('index')->with('news',$news);
    }
    public function Auth(Request $request)
    {
        $rules = array('email'=>'required','password'=>'required');

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return Redirect('login')->withErrors($validator);
        }
        $auth = Auth::attempt(array(
            'email'=> $request->input('email'),
            'password'=>$request->input('password')
        ),false);
        if (!$auth){
            return Redirect('login')->withErrors(array('Ошибка авторизации'));
        }
        return Redirect('admin');
    }

}
