<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Models\Post;
use \App\Http\Requests\PostRequest;

class PostsController extends Controller
{
    public function index($id="noname",$pass="unknown"){
        // $posts = DB::select("select * from posts");
        // return view("posts.index",["posts"=>"$posts"]);
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
public function store(PostRequest $request){
    
    $post = new Post();
    $post->title = $request->title;
    $post->body = $request->body;
    $post->save();
    return redirect("/");
}
public function edit(Post $post){
    return view("posts.edit")->with("post",$post);
}
public function update(PostRequest $request,Post $post){
    
    $post->title = $request->title;
    $post->body = $request->body;
    $post->save();
    return redirect("/");
}
public function destroy(Post $post) {
    $post->delete();
    return redirect('/');
  }

  public function test() {
    $tests = DB::select("select * from posts");
     return view("posts.test")->with("tests",$tests);
  }


}

