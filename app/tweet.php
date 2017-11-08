<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tweet extends Model
{
    public function getBodyAttibute($value){
    	return ucfirst($value);
    }
    public function setBodyAttribute($value){
    	return $this->attributes['body']=ucfirst($value);
    }
}
