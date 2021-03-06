<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskFilePivotTable extends Migration
{
    
    public function up()
    {
        Schema::create('task_file', function (Blueprint $table) {
            $table->integer('task_id')->unsigned();
            $table->foreign('task_id')->references('id')->on('tasks');
            $table->string('filename')->nullable();
            $table->timestamps();
        });
    }

   
}