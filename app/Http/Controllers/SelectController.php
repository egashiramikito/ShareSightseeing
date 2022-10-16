<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelectController extends Controller
{
    //select画面を表示する
    
    public function select()
    {
        return view('select');
        
    }
}
