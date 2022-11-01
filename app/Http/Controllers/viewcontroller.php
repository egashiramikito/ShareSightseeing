<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Area;
use App\Models\Prefecture;

class viewcontroller extends Controller
{
    //
    public function viewarea()
    {
        return view('viewareas/index')->with(['areas' => $area->get()]);
    }
    
    
    
}
