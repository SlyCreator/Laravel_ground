<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bcomment;
use App\Bpost;
class BpostController extends Controller
{
    public function index()
    {
        $post   =   Bpost::find(2);
        //dd($post);
        $comments=  $post->comment;
        dd($comments);
    }

    public function create()
    {
        $post  = Bpost::find(1);
        $comment = new Bcomment;
        $comment->comment = "Hi i learning to code";
        $post->bcomments()
                ->save($comment);
    }
}
