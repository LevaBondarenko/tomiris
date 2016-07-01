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

    public function RecordContent(BasePage $basePage)
    {
        $this->data['content'] = $basePage->getPage();
        return view('admin.head',$this->data);
    }
    public function RecordContentSave(Request $request,BasePage $basePage)
    {
        
        $content = BasePage::find(1);
        
        $content->title = $request->title;
        $content->restoran = $request->restoran;
        $content->kalyan = $request->kalyan;
        $content->hotel = $request->hotel;
        $content->bathroom = $request->bathroom;
        $content->vk = $request->vk;
        $content->instagram = $request->instagram;
        $content->fb = $request->fb;

        $content->save();

            return redirect('admin/head')->with('status', 'Запись отредактирована');
    }
}