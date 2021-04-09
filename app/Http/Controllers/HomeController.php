<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        // $post = Post::find(5);
        // dd($post->comments);

        // $comment = Comment::find(15);
        // dd($comment->post);

        // $posts = Post::with('comments')->get();
        // dd($posts[0]->comments);

    }
}
