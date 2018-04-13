<?php

namespace App\Http\Controllers;

use App\Episode;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
	public function index(){
		$episodes = Episode::with('season_id');
		return json_encode($series);
	}
}
