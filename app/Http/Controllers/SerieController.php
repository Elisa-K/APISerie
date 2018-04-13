<?php

namespace App\Http\Controllers;

use App\Http\Resources\SerieResource;
use Illuminate\Http\Request;

class SerieController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serie = Serie::all();
        return new SerieResource($serie);
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
            'season_number' => 'required|string'
        ]);

        $data = $request->all();

        $serie = Serie::create($data);


        if ($serie->exists) {
            $request->session()->flash('message', 'Nouvelle serie ajouté');
            return new SerieResource($serie);
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
        $serie = Serie::findOrFail($id);
        return new SerieResource($serie);
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
        $serie = Serie::findOrFail($id);

        $serie->title = $request->input('title');
        $serie->synopsis = $request->input('synopsis');
        $serie->season_number = $request->input('season_number');

        return new SerieResource($serie);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $serie = Serie::findOrFail($id);

        $serie->seasons()->episodes()->delete();
        $serie->seasons()->delete();
        $serie->delete();
    }
}
