@extends('layout')

@section('content')

<h1>Edit Post</h1>

<form method="POST" action="/posts/{{ $post->id }}">

	@csrf
	@method('PATCH')
	<!--{{ csrf_field() }}
	{{ method_field('PATCH') }}-->

	<div>
		<input type="text" name="post" value="{{ $post->post }}" placeholder="Post">
	</div>
	<div>
		<button type="submit">Edit Post</button>
	</div>

</form>

<form method="POST" action="/posts/{{ $post->id }}">

	@csrf
	@method('DELETE')
	<!--{{ csrf_field() }}
	{{ method_field('DELETE') }}-->

	<div>
		<button type="submit">Delete Post</button>
	</div>

</form>

@endsection
