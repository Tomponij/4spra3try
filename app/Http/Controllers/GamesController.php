<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;
use function PHPUnit\Framework\returnArgument;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $matches = Game::all();
        return view('pages.dashboard.games.index')->with(compact('matches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return edit form
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game = Game::findOrFail($id);
        return view('pages.dashboard.games.edit')->with(compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $game = Game::findOrFail($id);
        $game->update(['team1_score'=>$request->team1Score,'team2_score'=>$request->team2Score,'field_id'=>$request->fieldInput]);
        $game->save();

        return redirect()->route('games.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function destroyAll(){
        $games = Game::all();
        foreach ($games as $game):
            $game->delete();
        endforeach;

        return redirect()->route('games.index');
    }

    //api
    // Fetcher
    public function arrayfetcher()
    {
        return response()->json(Game::all());
    }

}
