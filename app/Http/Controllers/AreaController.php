<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Prefecture;
class AreaController extends Controller
{
    //
    
    
   public function area(Area $area)
   {
        return view('areas/index')->with(['areas' => $area->get()]);
        
   }
  
   
    public function show(Area $area, Prefecture $prefecture)
    {
     
        return view('areas/show')->with(['area' => $area,'prefectures' => $prefecture->where('area_id',$area->id)->get()]);
  
        
    }
   
   
   
    
    
    
    
    
    
    
}



 