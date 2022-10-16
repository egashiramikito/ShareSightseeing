<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
   public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->get()]); 
    }
    
    
    public function create()
    {
        return view('posts/create');
    }
    
    
    public function edit(Post $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }
    
    
    public function store(Request $request, Post $post)
    {
 
    $input = $request['post'];
    $post->fill($input)->save();
    return redirect('/posts/' . $post->id);
    }
    
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input)->save();

        return redirect('/posts/' . $post->id);
    }
    
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
    
   
    
    
    /**
 * 特定IDのpostを表示する
 *
 * @params Object Post // 引数の$postはid=1のPostインスタンス
 * @return Reposnse post view
 */
    public function show(Post $post)
    {
    return view('posts/show')->with(['post' => $post]);
    }
    
}


