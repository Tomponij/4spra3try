<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            "team1_id"=>"1",
            "team1_score"=>"2",
            "team2_id"=>"2",
            "team2_score"=>"1",
            "speeltijd"=>"12:00",
            "field_id"=>"1",
            "referee_id"=>"3",
        ]);

        DB::table('games')->insert([
            "team1_id"=>"3",
            "team1_score"=>"0",
            "team2_id"=>"2",
            "team2_score"=>"1",
            "speeltijd"=>"13:00",
            "field_id"=>"1",
            "referee_id"=>"3",
        ]);

        DB::table('games')->insert([
            "team1_id"=>"2",
            "team1_score"=>"2",
            "team2_id"=>"3",
            "team2_score"=>"1",
            "speeltijd"=>"15:00",
            "field_id"=>"1",
            "referee_id"=>"3",
        ]);
    }
}
