<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function LatestNews()
    {

        $news = News::orderBy('id','desc')
            ->take(3)
            ->get();

        return \Illuminate\Support\Facades\View::make('welcome')->with('news',$news);
    }
}
