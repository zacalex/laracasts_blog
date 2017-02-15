<?php

namespace App\Http\Controllers;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Post $post) {
        
        $this->validate(request(),[
            
            'body'  => 'required|min:2'
        ]);
        //$post->addComment(request('body'));

        $comment = Comment::create([

            'body' => request('body'),
            'post_id'=> $post->id,
            'user_id'=> auth()->id(),

        ]);


        return back();
    }
}
