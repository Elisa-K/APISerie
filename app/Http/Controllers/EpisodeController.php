<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EpisodeController extends Controller
{

    public function index()
    {
        $episode = Episode::all();
        return new EpisodeResource($episode);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'synopsis' => 'required|string',
            'number' => 'required|string',
            'season_id' => 'required|string'
        ]);

        $data = $request->all();

        $episode = Episode::create($data);


        if ($episode->exists) {
            $request->session()->flash('message', 'Nouvelle episode ajouté');
            return new EpisodeResource($episode);
        } else {
            $request->session()->flash('message', 'une erreur est survenue');
        }
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $episode = Episode::findOrFail($id);
        return new EpisodeResource($episode);
    }

    /**
     * Show the form for editing the specified resource.
     *
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $episode = Episode::findOrFail($id);

        $episode->title = $request->input('title');
        $episode->synopsis = $request->input('synopsis');
        $episode->synopsis = $request->input('number');
        $episode->season_number = $request->input('season_id');

        return new EpisodeResource($episode);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $episode = Episode::findOrFail($id);


        $episode->delete();
    }
}
