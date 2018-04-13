<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
	public function serie(){
		return $this->belongsTo(Serie::class, 'serie_id', 'id');
	}

	public function episodes(){
		return $this->hasMany(Episode::class);
	}
}
