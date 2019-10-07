<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use App\Video;

class OnemorphismController extends Controller
{
    public function index(Request $request)
    {
        // $post = Post::find(1);
        // dd($post->comments);

        $video = Video::find(1);
        $pp = $video->comments;

        return response()->json($pp);
    }

    public function create_comment(Request $request)
    {
        // $post = Post::find(1);
        // $comment = new Comment;
        // $comment->body = "Hi to this post";
        // $post->comments()->save($comment);
        // return response()->json($pp);


        
        $video = new Video;
        //$video = Video::find(1);
        $video->id = $request->id;

        $comment = new Comment;
        //$comment->body = "I love selman";
        $comment->body = $request->body;


        $video->comments()->save($comment);

        return response()->json('successfully created');
    }
    public function show_video(Video $video)
    {
        $videos = Video::all();
        return view('post.show',compact('video'));
    }
}
