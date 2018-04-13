<?php

namespace App\Http\Controllers;
use App\Season;
use Illuminate\Http\Request;
use App\Http\Resources\SeasonResource;

class SeasonController extends Controller
{


    public function index()
    {
        $seasons = Season::with('serie', 'episodes')->get();
        return new SeasonResource($seasons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate($request, [
            'episode_number' => 'required|string',
            'serie_id' => 'required|string',

        ]);

        $data = $request->all();

        $season = Season::create($data);


        if ($season->exists) {
            $request->session()->flash('message', 'Nouvelle Season ajouté');
            return new SeasonResource($season);
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
        $season = $seasons = Season::with('serie', 'episodes')->get()->find($id);
        return new SeasonResource($season);
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
        $season = Season::findOrFail($id);

        $season->title = $request->input('episode_number');
        $season->synopsis = $request->input('serie_id');


        return new SeasonResource($season);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $season = Season::findOrFail($id);


        $season->seasons()->delete();
        $season->delete();
    }

}
