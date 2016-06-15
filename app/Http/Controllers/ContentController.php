<?php
/**
 * Created by PhpStorm.
 * User: Лев
 * Date: 14.06.2016
 * Time: 22:16
 */

namespace App\Http\Controllers;
use App\News;
use App\BasePage;
use App\Http\Requests;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index(News $news, BasePage $basePage )
    {
        $this->data['news'] = $news->getNews();
        $this->data['content']= $basePage->getPage();

        return view('welcome', $this->data);
    }
}