@extends('layouts.main')

@section('content')
<div style="width: 70%">
    <!-- 顯示驗證錯誤 -->
    @include('common.errors')
    <h2>新增文章</h2> 
    <div>
        <!-- 新任務的表單 -->
        <form action="/post" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            
            <h3>文章標題</h3>
            <input name="title" style="width:100%">
            <br>
            <h3>文章內文</h3>
            <textarea name="content" rows="4" cols="50" style="height:200px; width:100% ;resize: none"></textarea>
            <div align="right">
                <input class="btn btn-default" type="submit" value="送出文章">
            </div>
            
        </form>
    </div>
</div>

@endsection