<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Comment;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        return view('post.index',['posts' => $posts]);
    }
    
    public function create(){
        return view('post.create');
    }
    
    public function show(Post $post){
        $comments = Comment::where('post_id',$post->id)->get();
        return view('post.show',
                ['post' => $post,'comments' => $comments]);
    }
    
    public function store(Request $request){
        
        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required'
        ],[
            'title.required' => '標題不得為空白',
            'title.max' => '標題不得超過255個字元',
            'content.required' => '內文不得為空白']
                );
         
        $title = $request->get('title');
        $content = $request->get('content');
        
        Post::create([
           'title' => $title,
           'content' => $content
        ]);
        
        return redirect()->route('home')->with('status', '文章新增完成');
    }
    
}
