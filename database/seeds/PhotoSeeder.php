<?php

use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('photos')->insert([
                'id' =>1,
                'post_id' =>1,
                'image' =>'写真',
                
             ]);
    }
}
