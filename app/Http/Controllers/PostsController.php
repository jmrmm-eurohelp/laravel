<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{

    public function index() {

    	$posts = Post::all();

    	return view('posts.index', compact('posts'));
    }

    public function create() {

    	return view('posts.create');

    }

    public function store() {

    	$post = new Post();

    	$post->post = request('post');
    	$post->save();

    	return redirect('/posts');

    }

    public function edit($id) {

    	$post = Post::findOrFail($id);

    	return view('posts.edit', compact('post'));
    }

    public function update($id) {

    	$post = Post::findOrFail($id);

		$post->post = request('post');
    	$post->save();

    	return redirect('/posts');

    }

    public function destroy($id) {

    	Post::findOrFail($id)->delete();

    	return redirect('/posts');
    }

}
