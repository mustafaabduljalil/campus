<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentEvaluationCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_evaluation_courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('student_id')->nullable();
            $table->bigInteger('course_id')->nullable();
            $table->bigInteger('question_id')->nullable();
            $table->tinyInteger('rate')->default(0);
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
        Schema::dropIfExists('student_evaluation_courses');
    }
}
