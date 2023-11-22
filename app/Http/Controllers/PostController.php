<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Container\RewindableGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;

class PostController extends Controller
{
    //
    public function index(){
    //  $post = DB::table('Post')->get();
        $posts = Post::get();
        
        return view('welcome', ['posts'=>$posts]);
    }
    
    public function detailPost(Post $post){
     //route model binding
        return view('detail', ['post'=> $post]);
    }

    public function addPost(){
        return view('add');
    }

    public function insertPost(Request $post){
        Post::create($post->all());
        
        return redirect('/')->with('Status','New Airplane added succesfully');

    }
    public function displayPost($id){
        $post = Post::find($id);
        return view('entry', compact('post'));
        
    }

    public function updatePost(Request $request, $id){
        $post = Post::find($id);
        $post->update($request->all());
        
        return redirect()->route('homepage')->with('success','Airplane data has been updated');
    }
    
    public function deletePost($id){
        $post = Post::find($id);
        $post->delete();  

        return redirect()->route('homepage')->with('success','Airplane data has been deleted');
    }

}
