<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileRevision extends Model
{
    public function file()
    {
    	return $this->belongsTo('App\File');
    }
}
