<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
	public function seasons(){
		return $this->hasManyThrough(Episode::class, Season::class);
	}
}
