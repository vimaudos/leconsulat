<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageTranslationsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_translations', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('image_id')->unsigned();
            
            $table->text('legende_image');
            $table->string('locale')->index();

            $table->unique(['image_id','locale']);
            $table->foreign('image_id')
                  ->references('id')
                  ->on('images')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('image_translations');
    }
}
