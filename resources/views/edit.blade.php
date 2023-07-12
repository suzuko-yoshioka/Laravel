@extends('layouts.app')

@section('title', '編集')

@section('content')
    <div class="container">
        <div class="row">
            <h1>編集</h1>
            <form method="POST" action="{{route('update')}}" onSubmit="return checkSubmit()"> 
                @method('PUT')
                @csrf 
                <input type="hidden" name="id" value="{{ $article->id }}">
                <div class="form-group">
                    <label for="image">商品画面</label>
                    <input type="text" class="form-control" id="image" name="image" placeholder="Image" value="{{ $article->image }}">
                    @if($errors->has('image'))
                        <p>{{ $errors->first('image') }}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label for="name">商品名</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ $article->name }}">
                    @if($errors->has('name'))
                        <p>{{ $errors->first('name') }}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label for="price">価格</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Price" value="{{ $article->price }}">
                    @if($errors->has('price'))
                        <p>{{ $errors->first('price') }}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label for="stock">在庫数</label>
                    <input type="number" class="form-control" id="stock" name="stock" placeholder="Stock" value="{{ $article->stock }}">
                    @if($errors->has('stock'))
                        <p>{{ $errors->first('stock') }}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label for="company">メーカー名</label>
                    <input type="text" class="form-control" id="company" name="company" placeholder="Company" value="{{ $article->company }}">
                    @if($errors->has('company'))
                        <p>{{ $errors->first('company') }}</p>
                    @endif
                </div>
                
                <div class="form-group">
                    <label for="comment">コメント</label>
                    <input type="text" class="form-control" id="comment" name="comment" placeholder="Comment" value="{{ $article->comment }}">
                    @if($errors->has('comment'))
                        <p>{{ $errors->first('comment') }}</p>
                    @endif
                </div>

                <button type="submit" class="btn btn-default">更新</button>
                <button><a href="{{ route('list') }}" class="btn">戻る</a></button>

            </form>
        </div>
    </div>
@endsection