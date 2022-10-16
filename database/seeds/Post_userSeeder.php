<?php

use Illuminate\Database\Seeder;

class Post_userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('post_users')->insert([
                'id' =>1,
                'user_id' => 1,
                'post_id' => 1,
                
             ]);
    }
}
