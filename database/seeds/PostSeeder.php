<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
// DB::table('テーブル名')->insert(['カラム名'] => 'データ' );
// Modelなどのuse宣言を忘れずに

public function run()
{
        DB::table('posts')->insert([
                'id' =>1,
                'title' => '',
                'body' => '',
                'user_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => new DateTime(),
                'prefecture_id' =>1,
                'area_id' =>1,
                
         ]);
}

}