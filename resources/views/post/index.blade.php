@extends('layouts.main')

@section('content')

@if (session('status'))
    <div class="alert alert-info">
        {{ session('status') }}
    </div>
@endif

@foreach ($posts as $post)
<tr>
    <!-- 任務名稱 -->
    <td class="table-text"> 
        <div>
            <font size="5">{{ $post->title }}</font>
        </div>
        <div>{{ $post->content }}</div>
    </td>
    <td>
        <div align="right">文章建立時間：{{$post->created_at}}</div>
    </td>
    <td>
        <div align="right"><a href="http://dev.blog.test/post/{{$post->id}}">more</a></div>
    </td>
    <br>
</tr>
@endforeach
{!! $posts->links() !!}

@endsection