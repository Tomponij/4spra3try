<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('pages/index')->with(compact('teams'));
    }

    public function teams(){
        $teams = Team::all();
        return view('pages/teams')->with(compact('teams'));
    }


}
