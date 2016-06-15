<?php

namespace App\Http\Controllers;

use App\News;
use App\BasePage;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Input;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;


    






    public function allNews()
    {
        $news = News::orderBy('id','desc')
            ->paginate(5);
        return view('admin.admin')->with('news',$news);
    }



    public function upload(News $news,Request $request)
    {
        if(Input::hasFile('image')){
            $image = $request->file('image');
            $image->move('uploads',$image->getClientOriginalName());
            $path = "uploads/".$image->getClientOriginalName();
            if($news->create(array(
                    'date'=>$request->date,
                    'title'=>$request->title,
                    'preview_text'=>$request->preview_text,
                    'detail_text'=>$request->detail_text,
                    'img_src'=>$path
                )
            ))
                return redirect('admin')->with('status','Запись добавлена');
        }else{
            $news->create(array(
                    'date'=>$request->date,
                    'title'=>$request->title,
                    'preview_text'=>$request->preview_text,
                    'detail_text'=>$request->detail_text
                )
            );
                return redirect('admin')->with('status','Запись добавлена');
        }






    }





    public function DeleteNews($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect('admin')->with('status','Запись под номером '.$id.' удалена');
    }






    public function UpdateNews($id)
    {
        $new = News::find($id);

        return view('admin.update')->with('new',$new);
    }





    public function SaveNews(Request $request)
    {


        $new = News::find($request->id);
        if (Input::hasFile('image')) {
            $image = $request->file('image');
            $image->move('uploads',$image->getClientOriginalName());
            $path = "uploads/".$image->getClientOriginalName();
            $new->date = $request->date;
            $new->title = $request->title;
            $new->preview_text = $request->preview_text;
            $new->detail_text = $request->detail_text;
            $new->img_src = $path;
            $new->save();

            return redirect('admin')->with('status', 'Запись отредактирована');
        } else {
            $new->date = $request->date;
            $new->title = $request->title;
            $new->preview_text = $request->preview_text;
            $new->detail_text = $request->detail_text;
            $new->save();
            return redirect('admin')->with('status', 'Запись отредактирована');
        }
    }


    public function NewsPage()
    {
        $news = News::orderBy('id','desc')
            ->paginate(6);
        return view('pages.news')->with('news',$news);
    }

    public function HotelPage()
    {
        return view('pages.hotel');
    }

    public function RestaurantPage()
    {
        return view('pages.restaurant');
    }

    public function LoungePage()
    {
        return view('pages.lounge');
    }
}
