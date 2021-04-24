@extends("layouts.default")

@section("title","log posts")
@section("content")
<h1>
  <a href="{{url("/posts/create")}}" class="header-menu">new post</a>
  Blog Posts</h1>
    <ul>
      @forelse($posts as $post)
      <li><a href="{{ action('App\Http\Controllers\PostsController@show', $post) }}">{{$post->title}}</a>
      <a href="{{ action('App\Http\Controllers\PostsController@edit', $post) }}" class="edit">[Edit]</a></li>
      <a href="#" class="del" data-id="{{ $post->id }}">[x]</a>
      <form method="post" action="{{url("/posts",$post->id)}}" id="form_{{$post->id}}">
        {{csrf_field()}}
        {{method_field("delete")}}
      </form>
      @empty
      <li>no posts yet</li>
      @endforelse
    </ul>
    <script src="/js/main.js"></script>
@endsection
