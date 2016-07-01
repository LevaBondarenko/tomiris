<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = 'my_news';
    protected $fillable = ['date','preview_text','detail_text','title','img_src'];


    public function getNews()
    {
        return News::orderBy('id','desc')
            ->take(3)
            ->get();

    }
}
