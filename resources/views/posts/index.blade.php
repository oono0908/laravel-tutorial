@extends("layouts.default")

@section("title","log posts")
@section("content")
<h1>
  <a href="{{url("/posts/create")}}" class="header-menu">new post</a>
  Blog Posts</h1>
    <ul>
      @forelse($posts as $post)
      <li><a href="{{ action('App\Http\Controllers\PostsController@show', $post) }}">{{$post->title}}</a></li>
      @empty
      <li>no posts yet</li>
      @endforelse
    </ul>
@endsection
