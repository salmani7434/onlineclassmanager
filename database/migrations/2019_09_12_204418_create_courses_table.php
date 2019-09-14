<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('professor_id')->default(1);
            $table->integer('login_id')->default(1);
            $table->integer('proxy_id')->default(1);
            $table->string('name')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('subject')->nullable();
            $table->boolean('is_important')->nullable()->default(false);
            $table->string('course_objectives')->nullable();
            $table->string('start_date')->nullable();
            $table->string('completion_date')->nullable();
            $table->integer('setup')->default(1);
            $table->timestamps();
            $table->softDeletes();

        });
    }

  
}
