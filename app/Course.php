<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable =['name','description','image','duration','doctor_id','lectures_count','students_count',
        'language','level','viewers'];

    public function doctor(){
        return $this->belongsTo('App\User','doctor_id','id');
    }

    /**
     * Return Image with Full path
     *
     *
     */
    public function getImageAttribute($value){
        if(is_null($this->attributes['image'])){
            return asset('course.jpeg');
        }
        return url('/storage/'.$this->attributes['image']);
    }

    public function rate(){
        return $this->hasMany('App\StudentEvaluationDoctor','course_id','id')->avg('rate');
    }
}
