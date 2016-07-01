<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BasePage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_page', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title',255)->change();
            $table->string('restoran');
            $table->string('kalyan');
            $table->string('hotel');
            $table->string('bathroom');
            $table->string('vk');
            $table->string('instagram');
            $table->string('fb');
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

    }
}
