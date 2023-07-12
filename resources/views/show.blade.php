@extends('layouts.app')

@section('content')
<h1>詳細</h1>
<table class="table table-striped">
    <tr>
        <th>商品画面</th>
        <td>{{ $article->image }}</td>
    </tr>
    <tr>
        <th>商品名</th>
        <td>{{ $article->name }}</td>
    </tr> 
    <tr>
        <th>価格</th>
        <td>{{ $article->price }}</td>
    </tr>
    <tr>
        <th>在庫数</th>
        <td>{{ $article->stock }}</td>
    </tr>
    <tr>
        <th>メーカー名</th>
        <td>{{ $article->company }}</td>
    </tr>
    <tr>
        <th>コメント</th>
        <td>{{ $article->comment }}</td>
    </tr>
</table>
<button type="button" class="btnbtn-primary" onclick="location.href='{{ route('edit',$article->id) }}'">編集</button>
<button><a href="{{ route('list') }}" class="btn">戻る</a></button>

@endsection