<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskTagPivotTable extends Migration
{
    
    public function up()
    {
        Schema::create('task_task_tag', function (Blueprint $table) {
            $table->integer('task_id')->unsigned();
            $table->foreign('task_id')->references('id')->on('tasks');
            $table->string('tagname');
            $table->timestamps();
          
        });
    }

   
}
