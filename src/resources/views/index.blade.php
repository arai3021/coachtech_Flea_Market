@extends('layouts/auth')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="main">
    <article class="category">
        <div class="category_title">
            <div class="category_rec">
                <a class="rec" href="">おすすめ</a>
            </div>
            <div class="category_my_list">
                <a class="my_list" href="">マイリスト</a>
            </div>
        </div>
    </article>
    <section>
        <div>
            <div></div>
            <div></div>
        </div>
    </section>
</div>
@endsection