@extends("layouts.default")

@section("title","test")
@section('content')
<h1>
  <a href="{{url("/")}}" class="header-menu">back</a>
  test</h1>
@foreach ($tests as $test)
  <li class="test">{{$test->title}}</li>
@endforeach
@endsection