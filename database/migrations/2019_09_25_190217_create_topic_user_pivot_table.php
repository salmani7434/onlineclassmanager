<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicUserPivotTable extends Migration
{
    
    public function up()
    {
        Schema::create('topic_user', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('topic_id')->unsigned()->nullable();
             $table->foreign('topic_id')->references('id')->on('topics');
        });
    }

    
}
