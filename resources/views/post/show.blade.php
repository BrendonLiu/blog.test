@extends('layouts.main')

@section('content')

<div style="width: 70%">
    <h1>{{$post->title}}</h1>
    <div>{{$post->content}}</div>
    <div align="right">文章建立時間：{{$post->created_at}}</div>

    <h2>我要留言</h2>
    
    <div class="panel-body">
        <!-- 顯示驗證錯誤 -->
        @include('common.errors')

        <!-- 新任務的表單 -->
        <form action="/comment" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- 任務名稱 -->
            <div class="form-group">
                <div class="col-sm-6">
                    <input type="hidden" name="id" value="{{$post->id}}">
                    <input type="text" name="comment" class="form-control">
                </div>
            </div>

            <!-- 增加任務按鈕-->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> 送出留言
                    </button>
                </div>
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