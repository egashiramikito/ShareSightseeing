<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
class Photo extends Model
{
    //
    protected $fillable = ['image','post_id'];
    
    
    
    
    public function Post()
{
    return $this->belongsTo('App\Models\Post');
}

    
    
    
    

}

