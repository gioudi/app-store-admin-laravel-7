<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            User::create([
                'name'=>'User1',
                'email'=>'user1@gmail.com',
                'password'=> bcrypt('password'),
            ]);
            User::create([
                'name'=>'User2',
                'email'=>'user2@gmail.com',
                'password'=> bcrypt('password'),
            ]);
            User::create([
                'name'=>'User3',
                'email'=>'user3@gmail.com',
                'password'=> bcrypt('password'),
            ]);
            User::create([
                'name'=>'User4',
                'email'=>'user4@gmail.com',
                'password'=> bcrypt('password'),
            ]);
            User::create([
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=> bcrypt('123456'),
            ]);
        }
    }
}
