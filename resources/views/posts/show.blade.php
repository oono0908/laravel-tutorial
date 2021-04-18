@extends("layouts.default")

@section("title",$post->titlef)
@section('content')
<h1>
  <a href="{{url("/")}}" class="header-menu">back</a>
  {{ $post->title }}</h1>
<p>{!! nl2br(e($post->body)) !!}</p>
@endsection