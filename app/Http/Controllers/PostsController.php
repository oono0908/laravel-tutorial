<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;

class PostsController extends Controller
{
    public function index($id="noname",$pass="unknown"){
      $posts = Post::latest()->get();
      return view("Posts.index",["posts" => $posts]);
}
public function show($id){
    $post = Post::findOrFail($id);
    return view("Posts.show",["post" => $post]);
}
public function create(){
    return view("posts.create");
}
public function store(Request $request){
    $this->validate($request, [
        'title' => 'required|min:3',
        'body' => 'required'
      ]);
    $post = new Post();
    $post->title = $request->title;
    $post->body = $request->body;
    $post->save();
    return redirect("/");
}
}