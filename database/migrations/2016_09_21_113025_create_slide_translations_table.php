<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlideTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slide_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('slide_id')->unsigned();
            
            $table->string('titre', 255);
            
            $table->string('locale')->index();

            $table->unique(['slide_id','locale']);
            $table->foreign('slide_id')
                  ->references('id')
                  ->on('slides')
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
        Schema::drop('slide_translations');
    }
}
