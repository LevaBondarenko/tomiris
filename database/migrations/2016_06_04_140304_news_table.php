<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('preview_text');
            $table->text('detail_text');
            $table->date('date');
            $table->string('img_src');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('my_news');
    }
}
