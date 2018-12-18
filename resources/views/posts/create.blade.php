@extends('layout')

@section('content')

<h1>New Post</h1>

<form method="POST" action="/posts">

	{{ csrf_field() }}
	
	<div>
		<input type="text" name="post" placeholder="Post">
	</div>
	<div>
		<button type="submit">Create Post</button>
	</div>
	
</form>

@endsection
