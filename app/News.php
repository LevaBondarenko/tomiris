<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = 'my_news';
    protected $fillable = ['date','preview_text','detail_text','title','img_src'];
}
