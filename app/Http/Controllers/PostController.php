<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        $post = Post::where('published','1')->first();
        dump($post);
        dd('..end');

    }

    public function create()
    {
    $postsArr = [
        [
            'title' =>'gfdg',
            'description'=>'fdf hgfgh ghgfh',
            'image' =>'gfdgfdgfd',
            'likes' =>45,
            'published'=>1
        ],
        [
            'title' =>'gfdg 2',
            'description'=>'fdf hgfgh ghgfh 2',
            'image' =>'gfdgfdgfd 2',
            'likes' =>45,
            'published'=>1
        ],
        ];
    foreach($postsArr  as $item){

        Post::create($item);
    }

    dd('created');
    }
    public function update(){
        $post = Post::find(4);
        $post->update([
            'title' =>'updated',
            'description'=>'fdf updated 2',
            'image' =>'image new',
            'likes' =>454,
            'published'=>0
        ]);
    }
    public function delete(){
        $post = Post::find(4);
        $post->delete();
    }
}
