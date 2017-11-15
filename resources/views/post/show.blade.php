@extends('layouts.main')

@section('content')

@if (session('status'))
    <div class="alert alert-info">
        {{ session('status') }}
    </div>
@endif

<div style="width: 70%">
    <!-- 顯示驗證錯誤 -->
    @include('common.errors')
    <h1>{{$post->title}}</h1>
    <div>{{$post->content}}</div>
    <div align="right">文章建立時間：{{$post->created_at}}</div>

    <h2>我要留言</h2>
    
    <div>
        <!-- 新任務的表單 -->
        <form action="{{route('comment.store')}}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            
            <textarea name="content" rows="4" cols="50" style="height:200px; width:100% ;resize: none"></textarea>
            <input type="hidden" name="id" value="{{$post->id}}">
            <div align="right">
                <input class="btn btn-default" type="submit" value="送出留言">
            </div>
            
        </form>
    </div>
    
    <h3>留言列表</h3>
    @foreach($comments as $comment)
    <tr>
        <!-- 任務名稱 -->
        <td class="table-text"> 
            {{ $comment->content }}
        </td>
        
        <td>
            <div align="right">留言時間：{{$comment->created_at}}</div>
        </td>
        <br>
    </tr>
    @endforeach
        
</div>

@endsection