<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table='students';
    protected $fillable=['course_id','reg_no','user_id'];
    public function course(){
    	return $this->hasOne('App\Models\Course','id','course_id');
    }
     public function user(){
    	return $this->hasOne('App\Models\User','id','user_id');
    }
    public function guardian(){
    	return $this->hasMany('App\Models\Guardian','student_id','id')->withDefault(['name'=>'Deleted']);
    }

  }
    