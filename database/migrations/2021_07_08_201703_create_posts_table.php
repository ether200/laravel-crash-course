<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     // The up method migrates everything to the database
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            /* 
                Create table in DB
            */
            $table->increments('id');
            $table->string('title');
            $table->mediumText('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

     // And the down, undo all the migrations
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
