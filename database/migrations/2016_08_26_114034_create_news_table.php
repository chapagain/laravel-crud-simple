<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // create table 'news'
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',255);
            $table->string('slug',100)->unique();
            $table->text('short_description');
            $table->text('full_content');
            $table->string('author',100);
            $table->string('category',100);            
            $table->timestamps(); // timestamps() creates created_at & updated_at fields       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // drop table 'news'
        Schema::drop('news');
    }
}
