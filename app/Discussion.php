<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
   
   public function file()
    {
    	return $this->belongsTo('App\File');
    }
 
   public function project()
    {
    	return $this->belongsTo('App\Project');
    }

   public function replys()
    {
    	return $this->hasMany('App\Reply');
    }
}
