<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    public function user()
	{
	    return $this->hasOne('App\User', 'id', 'userId');
	}
}
