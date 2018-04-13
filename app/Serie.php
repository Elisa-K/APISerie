<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
	public function seasons(){
		return $this->hasMany(Season::class);
	}

	public function episodes(){
		return $this->hasManyThrough(Episode::class, Season::class, 'serie_id','season_id','id', 'id');
	}

	public function users()
	{
		return $this->belongsToMany(User::class);
	}
}
