<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'name' => 'EenhoornTeam',
            'playerName' => 'Frenkie',
            'creator_id' => 1,
        ]);

        DB::table('teams')->insert([
            'name' => 'PietenTeam',
            'playerName' => 'Frenkie',
            'creator_id' => 3,
        ]);

        DB::table('teams')->insert([
            'name' => 'CroissantjesTeam',
            'playerName' => 'Frenkie',
            'creator_id' => 3,
        ]);
    }
}
