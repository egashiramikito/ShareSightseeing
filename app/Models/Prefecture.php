<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    
    
  public function area()
{
    return $this->belongsTo('App\Area');
}
  
  
  
  
  
    //
}
