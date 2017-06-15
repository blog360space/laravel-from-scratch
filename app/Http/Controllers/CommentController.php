<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }

    public function store(Request $request, Post $post)
    {
        $this->validate(request(), [
            'body' => 'required|min:5'
        ]);
        $body = request('body');
        
        $post->addComment($body, auth()->user()->id);
        
        return back();
    }
}
