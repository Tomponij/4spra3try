<?php

namespace App\Http\Controllers;

use App\Models\Match;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index()
    {
        $teams = Team::all()->take(5);
        return view('pages/index')->with(compact('teams'));
    }

    public function teams(){
        $teams = Team::all();
        return view('pages/teams')->with(compact('teams'));
    }

    public function games()
    {
        $teams = Team::join('users', 'creator_id','=','users.id')->get(['teams.*','users.name as creatorname']);
        $matches = DB::table('games')->get();
        return view('pages/games')->with(compact('matches'));

    }


}
