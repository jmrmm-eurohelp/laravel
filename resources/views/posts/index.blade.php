@extends('layout')

@section('content')

<h1>Posts</h1>

	@foreach ($posts as $post)
		<li><a href="/posts/{{ $post->id }}/edit">{{ $post->post }}</a></li>
	@endforeach

	<br/>
	<div><a href="/posts/create">New Post</a></div>

@endsection
