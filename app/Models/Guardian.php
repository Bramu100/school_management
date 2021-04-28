<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    use HasFactory;
    protected $table='guardians';
    protected $fillable=['user_id','student_id'];
    public function student(){
    	return $this->hasMany('App\Models\Student','id','student_id');
    }
     public function user(){
    	return $this->hasOne('App\Models\User','id','user_id');
    }


}
