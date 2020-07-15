<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PostCollection;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        return new PostCollection(Task::all());
    }

    public function store(Request $request)
    {
        $post = new Post([
            'title' => $request->get('title'),
            'body' => $request->get('body'),
        ]);
        $post->save();
        return response()->json('success');
    }
}
