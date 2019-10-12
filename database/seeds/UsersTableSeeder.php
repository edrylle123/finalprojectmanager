<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User;
        $user->name = 'admin';
        $user->email = 'pogi@pogi.com';
        $user->password = bcrypt('pogi');
        $user->save();
    }
}
