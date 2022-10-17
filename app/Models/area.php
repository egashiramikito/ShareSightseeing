<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model 
{
    use SoftDeletes;
    //テーブル名
    protected $table = 'areas';
    
    protected $fillable = [
    'id',
    'name',
];
    
    //可変項目
    
}