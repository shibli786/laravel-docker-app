<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
        protected $fillable=array('name','email','gender','address');

}
