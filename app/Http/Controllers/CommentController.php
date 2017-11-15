<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Requests;

class CommentController extends Controller
{
    public function stroe(Request $request){        
        $this->validate($request, [
            'content' => 'required|max:255',
        ],['content.required' => '留言不得為空白',
           'content.max' => '留言不得超過255個字元'
            ]);
        
        $content = $request->get('content');
        Comment::create([
           'content' => $content,
           'post_id' => $request->get('id')
        ]);
        
        return redirect()->back()->with('status', '留言新增完成');
    }
}
