<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BasePage extends Model
{
    
    protected $table = 'my_page';


    public function getPage()
    {
        return BasePage::where('id',1)->get();
    }
}
