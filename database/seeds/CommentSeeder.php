<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('comments')->insert([
                'id' =>1,
                'body' => '命名はデータを基準に考える',
                'user_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => new DateTime(),
                'post_id' => 1,
                
             ]);
                
    }
}
