<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public function revisions()
    {
    	return $this->hasMany('App/FileRevision');
    }


     public function comments()
    {
    	return $this->hasMany('App/FileComment');
    }
}
