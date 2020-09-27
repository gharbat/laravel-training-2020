<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function add(){
        return view("add");
    }

    public function insert(Request $request){
        // 1
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect("/add");
    }

    public function index(){
        $posts = Post::all();
        return view("index", compact('posts'));
    }

    public function show($id){
        $post = Post::where('id', $id)->firstOrFail();
        return view('show', compact('post'));
    }

    public function delete($id){
        Post::findOrFail($id)->delete();
        return redirect("/");
    }


    public function bootstrap(){
        return view("bootstrap");
    }
}
