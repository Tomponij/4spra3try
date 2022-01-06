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
            'name' => 'Ajax',
            'creator_id' => 1,
        ]);

        DB::table('teams')->insert([
            'name' => 'PSV',
            'creator_id' => 3,
        ]);

        DB::table('teams')->insert([
            'name' => 'NAC',
            'creator_id' => 3,
        ]);
    }
}
