<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreatePostsTable extends Migration {


    public function up()
    {

        Schema::create('posts', function(Blueprint $table) {

            $table->increments('id');
            $table->timestamps();
            
            $table->string('image');
            
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');

        });
    }

    public function down()
    {
        Schema::drop('posts');
    }
    
}