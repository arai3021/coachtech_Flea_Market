@extends('layouts/auth')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sell.css') }}">
@endsection

@section('content')
<div>
    <h1>商品の出品</h1>
    <div>
        <h3>商品画像</h3>
        <div>
            <form action="/index" method="post" enctype="multipart/form-data">
                @csrf
                <label for="image">画像をアップロード</label>
                <input type="file" id="image" name="image">
                <h3>商品の詳細</h3>
                <textarea name="textarea" cols="40" rows="10" placeholder="商品の説明を書いてね"></textarea>
                <button type="submit">出品する</button>
            </form>
        </div>
    </div>
</div>
商品の詳細
カテゴリー
商品の状態
商品名と説明
商品名
商品の説明
販売価格
出品する
@endsection