<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\Game;
use App\Models\Team;
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
        $json = Game::all();
        return response()->json([
            "status" => "1",
            "payload" => $json
        ]);
    }

    public function genereer(){

        $teams = Team::all();

        for ($i=0 ; $i < count($teams)-1 ; $i++) {
            // Loop through the 'visiting' teams, start one above the home team
            for ($k = $i + 1; $k < count($teams); $k++) {
                $game = new Game();
                $game->team1_id = $teams[$i]->id;
                $game->team2_id = $teams[$k]->id;
                $game->field_id = rand(1,Field::all()->count());
                $game->referee_id = 1;
                $game->save();
            }
        }
        return redirect()->route('games.index');
    }

    




}



