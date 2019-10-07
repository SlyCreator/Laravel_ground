<?php

namespace App\Http\Controllers;
use App\Post;
use App\Video;
use App\Tag;
use Illuminate\Http\Request;

class ManymorphismController extends Controller
{

    /**get */
    public function get_video_tags()
    {
        
    }
    public function get_post_tags()
    {

    }
    public function get_tag_videos()
    {

    }
    public function get_tag_posts()
    {

    }


    /**create */
    public function create_video_tags()
    {
        $video = Video::find(1);
        $tag1 = new Tag;
        $tag1->name = "ItSolutionStuff.com";
        $tag2 = new Tag;
        $tag2->name = "ItSolutionStuff.com 2";
        $video->tags()->saveMany([$tag1, $tag2]);
    }
    public function create_post_tags()
    {

    }
    public function create_tag_videos()
    {

    }
    public function create_tag_posts()
    {

    }

}
