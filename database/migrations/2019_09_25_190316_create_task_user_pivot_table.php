<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskUserPivotTable extends Migration
{
    
    public function up()
    {
        Schema::create('task_user', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('task_id')->unsigned()->nullable();
             $table->foreign('task_id')->references('id')->on('tasks');
        });
    }

   
}
