<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
           'name'=>'User1',
           'email'=>'user1@gmail.com',
           'password'=> bcrypt('password'),
       ]);
       DB::table('users')->insert([
        'name'=>'User2',
        'email'=>'user2@gmail.com',
        'password'=> bcrypt('password'),
    ]);
    }
}
