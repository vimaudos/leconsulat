<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryTranslationsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery_translations', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('gallery_id')->unsigned();
            
            $table->text('nom_gallery');
            $table->string('locale')->index();

            $table->unique(['gallery_id','locale']);
            $table->foreign('gallery_id')
                  ->references('id')
                  ->on('galleries')
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
        Schema::drop('gallery_translations');
    }
}
