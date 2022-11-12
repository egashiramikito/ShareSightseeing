<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Area;
use App\Models\Prefecture;
use App\Models\Photo;

class viewcontroller extends Controller
{
    //
    public function viewarea(Area $area)
    {
        return view('viewareas/index')->with(['areas' => $area->get()]);
    }
    
    
    public function show(Area $area, Prefecture $prefecture)
    {
     
        return view('viewareas/show')->with(['area' => $area,'prefectures' => $prefecture->where('area_id',$area->id)->get()]);
    }    
    
    
    public function view(Area $area, Prefecture $prefecture, Post $post)
    {
    $posts = $post->with('photos')->where("prefecture_id", $prefecture->id)->get();
        return view('viewareas/view')->with(['area' =>$area, 'posts' => $posts]);
    }
    
    
}
