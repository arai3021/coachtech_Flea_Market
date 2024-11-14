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
    <section class="merchandise">
        <div class="merchandise_card">
            <div class="card_img">
                <img src="images/Armani+Mens+Clock.jpg" alt="腕時計">
            </div>
            <h3 class="card_ttl">腕時計</h3>
            <p>スタイリッシュなデザインのメンズ腕時計</p>
        </div>
    </section>
</div>
@endsection