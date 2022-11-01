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
    'user_id',
    'area_id',
    'prefecture_id'
];
 
 
  public function area()
{
    return $this->belongsTo('App\Area');
}
  
  
    public function prefecture()
{
    return $this->belongsTo('App\Prefecture');
}
   
    //可変項目
    
}