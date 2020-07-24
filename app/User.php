<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','image','phone','role','specialization'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Return Image with Full path
     *
     *
     */
    public function getImageAttribute($value){
        if(is_null($this->attributes['image'])){
            return asset('user.jpg');
        }
        return url('/storage/'.$this->attributes['image']);
    }

    /**
     * Get all of the post's rates.
     */
    public function rates()
    {
        return $this->morphMany('App\UserRate', 'ratable');
    }


    public function courses(){
        return $this->belongsToMany('App\Course','user_courses','student_id','course_id');
    }

    public function doctorCourses(){
        return $this->hasMany('App\Course','doctor_id','id');
    }

}
