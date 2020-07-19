<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        return Post::orderBy('created_at', 'desc')->get();
    }

    public function show($post_id)
    {
        $post = Post::findOrFail($post_id);
        
        return $post;
    }

    public function store(Request $request) 
    {
        return Post::create($request->all());
    }

    public function destroy(Post $post)
    {
        \DB::transaction(function() use ($post) {
            $post->comments()->delete();
            $post->delete();
        });
    }
}
