<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseMaterialFilePivotTable extends Migration
{
    
    public function up()
    {
        Schema::create('course_material_file', function (Blueprint $table) {
             $table->integer('course_material_id')->unsigned()->nullable();
            $table->foreign('course_material_id')->references('id')->on('course_materials');
        });
    }

   
}
