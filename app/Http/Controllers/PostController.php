<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Area;
use App\Models\Prefecture;
use Cloudinary;
use App\Models\Photo;
use Illuminate\Support\Facades\DB;
use InterventionImage;


class PostController extends Controller
{
    //
   public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->get()]); 
    }
    
    
    public function create(Area $area,Prefecture $prefecture)
    {
        $area_id=$area->id;
        $prefecture_id=$prefecture->id;
        return view('posts/create')->with(['area_id' => $area_id,'prefecture_id' => $prefecture_id]);
    }
    
    
    public function edit(Post $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }
    
    
    public function store(Request $request, Post $post, Photo $photo)
    {
 
    $input = $request['post'];
    $input['user_id'] = Auth::id();
    $input['area_id'] = (int)$input['area_id'];
    $input['prefecture_id'] = (int)$input['prefecture_id'];
    $post->fill($input)->save();
    
    $image['image']= Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
    
    $post_id=DB::table('posts')->latest('id')->first();
    $image['post_id'] = $post_id->id;
    $photo->fill($image)->save();
    $image = Image::make($filePath);
   
    return view('/select');
   
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
