<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicTaskPivotTable extends Migration
{
    
    public function up()
    {
        Schema::create('topic_task', function (Blueprint $table) {
            $table->integer('topic_id')->unsigned()->nullable();
            $table->foreign('topic_id')->references('id')->on('topics');
            $table->integer('task_id')->unsigned()->nullable();
            $table->foreign('task_id')->references('id')->on('tasks');
        });
    }

  
}
