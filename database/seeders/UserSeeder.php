<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'AdminAccount';
        $user->email = 'adminaccount123@gmail.com';
        $user->password = 'testtest123Admin';
        $user->admin = '1';
        $user->save();

        $user = new User();
        $user->name = 'Tom Slavenburg';
        $user->email = 'tomslavenburg@gmail.com';
        $user->password = 'testtest123tom';
        $user->admin = '0';
        $user->save();

        $user = new User();
        $user->name = 'Fons Doggen';
        $user->email = 'fonsdoggen@gmail.com';
        $user->password = 'testtest123fons';
        $user->admin = '0';
        $user->save();
    }
}
