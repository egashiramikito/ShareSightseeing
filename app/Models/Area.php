<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //
   
    //テーブル名
   // protected $table = 'areas';
    
    protected $guarded = [
    'id',
    'name',
];
    
    //可変項目
 public function prefectures()   
{
    return $this->hasMany('App\Prefecture');  
}



}
