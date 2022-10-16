<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model 
{
    use SoftDeletes;
    //テーブル名
    protected $table = 'posts';
    
    protected $fillable = [
    'title',
    'body',
];
    
    //可変項目
    
}