<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();
        

        foreach(range(1,50) as $index) {
            DB::table('posts')->insert(['title' => 'prueba', 'description'=>'this is my description']);
        }
    }
}
