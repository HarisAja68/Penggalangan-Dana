<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory(2)->create();

        $user = User::first();
        $user->name = 'Admin';
        $user->email = 'admin@gmail.com';
        $user->role_id = 1;
        $user->save();
    }
}
