<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_model_values', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('course_module_id')->unsigned()->nullable();
            $table->string('value');
            $table->bigInteger('course_id')->unsigned()->nullable();
            $table->foreign('course_module_id')->references('id')->on('course_models')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('popular_courses')->onDelete('cascade');
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
        Schema::dropIfExists('course_model_values');
    }
};
