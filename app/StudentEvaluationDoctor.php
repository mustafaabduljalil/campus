<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentEvaluationDoctor extends Model
{
    protected $fillable = ['student_id','doctor_id','question_id','rate','course_id'];
}
