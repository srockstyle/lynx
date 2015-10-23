<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('articles', function (Blueprint $table) {
         $table->increments('id');
         $table->string('title');
         $table->text('body');
         $table->integer('user_id');
         $table->timestamps();
      });
      Schema::create('tags', function (Blueprint $table) {
         $table->increments('id');
         $table->string('name');
         $table->timestamps();
      });
      Schema::create('articles_tags', function (Blueprint $table) {
         $table->increments('id');
         $table->integer('tag_id');
         $table->integer('article_id');
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
      Schema::drop('articles');
    }
}
