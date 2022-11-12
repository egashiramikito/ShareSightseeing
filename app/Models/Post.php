<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Photo;
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
    return $this->belongsTo('App\Models\Area');
}
  
  
    public function prefecture()
{
    return $this->belongsTo('App\Models\Prefecture');
}


    public function photos()
{
    return $this->hasMany('App\Models\Photo');
}  
    //可変項目
    
//  public function test($prefecture)
// {
//     return $this->where('prefecture_id',$prefecture->id)->get();
// }

//  public function getByphoto()
// {
//     return $this->photos()->with('post')->get();
// }


}