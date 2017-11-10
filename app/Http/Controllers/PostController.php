<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
    public function index(){
        $posts = Post::paginate(5);
        return view('post.index',['posts' => $posts]);
    }
    
    public function create(){
        return view('post.create');
    }
    
    public function show(Post $post){
        //$id = $post->getAttribute('id');
        $comments = Comment::where('post_id',$post->id)->get();
        //dd($comments);
        return view('post.show',
                ['post' => $post,'comments' => $comments]);
    }
    
    public function store(){
    return view('post.stroe');
    }
    
}
