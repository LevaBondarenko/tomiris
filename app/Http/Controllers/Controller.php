<?php

namespace App\Http\Controllers;

use App\News;
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




    public function LatestNews()
    {

        $news = News::orderBy('id','desc')
            ->take(3)
            ->get();

        return \Illuminate\Support\Facades\View::make('welcome')->with('news',$news);
    }




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
            $image->move('uploads', $image->getClientOriginalName());
            $path = "uploads/" . $image->getClientOriginalName();
            if ($new->create(array(
                    'date' => $request->date,
                    'title' => $request->title,
                    'preview_text' => $request->preview_text,
                    'detail_text' => $request->detail_text,
                    'img_src' => $path
                )
            )
            )
                return redirect('admin')->with('status', 'Запись отредактирована');
        } else {

            $new->create(array(
                'date' => $request->date,
                'title' => $request->title,
                'preview_text' => $request->preview_text,
                'detail_text' => $request->detail_text
            ));
            return redirect('admin')->with('status', 'Запись отредактирована');
        }
    }
}
