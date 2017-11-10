<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use App\Http\Requests;

class CommentController extends Controller
{
    public function stroe(Request $request){        
        $this->validate($request, [
            'comment' => 'required|max:255',
        ],['comment.required' => '留言不得為空白',
           'comment.max' => '字元不得超過255']);
        
        //dd($request->all());
          
        $comment = $request->get('comment');
        Comment::create([
           'content' => $comment,
           'post_id' => $request->get('id')
        ]);
        
        $post = Post::where('id',$request->get('id'));
        
        return redirect('/posts/'.$post);
    }
}
