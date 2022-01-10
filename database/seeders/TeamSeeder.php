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
            'creator_id' => 1,
        ]);

        DB::table('teams')->insert([
            'name' => 'PietenTeam',
            'creator_id' => 3,
        ]);

        DB::table('teams')->insert([
            'name' => 'CroissantjesTeam',
            'creator_id' => 3,
        ]);
    }
}
