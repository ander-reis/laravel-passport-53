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
        factory(\App\User::class)->create([
            'email' => 'admin@user.com',
            //'password' => bcrypt('123456')
        ]);

        factory(\App\User::class)->create([
            'email' => 'user@user.com',
            //'password' => bcrypt('123456')
        ]);
    }
}
