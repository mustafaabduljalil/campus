<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseEvaluation extends Model
{
    protected $fillable = ['course_id','doctor_id','option','value','type','evaluation_number'];
}
