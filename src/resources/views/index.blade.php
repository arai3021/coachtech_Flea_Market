@extends('layouts/auth')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="main">
    <article class="category">
        <div class="category_title">
            <div class="category_rec">
                <a class="rec" href="{{ url('/') }}?tab=rec">おすすめ</a>
            </div>
            <div class="category_my_list">
                <a class="my_list" href="{{ url('/') }}?tab=my_list">マイリスト</a>
            </div>
        </div>
    </article>
<!---------------------- 下記から商品欄 ---------------------->
    <section class="merchandise">
    @foreach ($merchandise as $item)
        <div class="merchandise_card">
            <div class="card_img">
                <img src="{{ $item->image_url }}" alt="{{ $item->name }}">
            </div>
            <div class="card_content">
                <h3 class="card_ttl">{{ $item->name }}</h3>
                <p class="explanation">{{ $item->description }}</p>
                <div class="detail">
                    <p class="price">{{ number_format($item->price, 2) }}</p>
                    <p class="condition">{{ $item->condition }}</p>
                </div>
            </div>
        </div>
    @endforeach
    <!--
        <div class="merchandise_card">
            <div class="card_img">
                <img src="images/HDD+Hard+Disk.jpg" alt="HDD">
            </div>
            <div class="card_content">
                <h3 class="card_ttl">HDD</h3>
                <p class="explanation">高速で信頼性の高いハードディスク</p>
                <div class="detail">
                    <p class="price">¥5,000</p>
                    <p class="condition">目立った傷や汚れなし</p>
                </div>
            </div>
        </div>
        <div class="merchandise_card">
            <div class="card_img">
                <img src="images/iLoveIMG+d.jpg" alt="玉ねぎ3束">
            </div>
            <div class="card_content">
                <h3 class="card_ttl">玉ねぎ3束</h3>
                <p class="explanation">新鮮な玉ねぎ3束のセット</p>
                <div class="detail">
                    <p class="price">¥300</p>
                    <p class="condition">やや傷や汚れあり</p>
                </div>
            </div>
        </div>
        <div class="merchandise_card">
            <div class="card_img">
                <img src="images/Leather+Shoes+Product+Photo.jpg" alt="革靴">
            </div>
            <div class="card_content">
                <h3 class="card_ttl">革靴</h3>
                <p class="explanation">クラシックなデザインの革靴</p>
                <div class="detail">
                    <p class="price">¥4,000</p>
                    <p class="condition">状態が悪い</p>
                </div>
            </div>
        </div>
        <div class="merchandise_card">
            <div class="card_img">
                <img src="images/Living+Room+Laptop.jpg" alt="ノートPC">
            </div>
            <div class="card_content">
                <h3 class="card_ttl">ノートPC</h3>
                <p class="explanation">高性能なノートパソコン</p>
                <div class="detail">
                    <p class="price">¥45,000</p>
                    <p class="condition">良好</p>
                </div>
            </div>
        </div>
        <div class="merchandise_card">
            <div class="card_img">
                <img src="images/Music+Mic+4632231.jpg" alt="マイク">
            </div>
            <div class="card_content">
                <h3 class="card_ttl">マイク</h3>
                <p class="explanation">高性能なレコーディング用マイク</p>
                <div class="detail">
                    <p class="price">¥8,000</p>
                    <p class="condition">目立った傷や汚れなし</p>
                </div>
            </div>
        </div>
        <div class="merchandise_card">
            <div class="card_img">
                <img src="images/Purse+fashion+pocket.jpg" alt="ショルダーバッグ">
            </div>
            <div class="card_content">
                <h3 class="card_ttl">ショルダーバッグ</h3>
                <p class="explanation">おしゃれなショルダーバッグ</p>
                <div class="detail">
                    <p class="price">¥3,500</p>
                    <p class="condition">やや傷や汚れあり</p>
                </div>
            </div>
        </div>
        <div class="merchandise_card">
            <div class="card_img">
                <img src="images/Tumbler+souvenir.jpg" alt="タンブラー">
            </div>
            <div class="card_content">
                <h3 class="card_ttl">タンブラー</h3>
                <p class="explanation">使いやすいタンブラー</p>
                <div class="detail">
                    <p class="price">¥500</p>
                    <p class="condition">状態が悪い</p>
                </div>
            </div>
        </div>
        <div class="merchandise_card">
            <div class="card_img">
                <img src="images/Waitress+with+Coffee+Grinder.jpg" alt="コーヒーミル">
            </div>
            <div class="card_content">
                <h3 class="card_ttl">コーヒーミル</h3>
                <p class="explanation">手動のコーヒーミル</p>
                <div class="detail">
                    <p class="price">¥4,000</p>
                    <p class="condition">良好</p>
                </div>
            </div>
        </div>
        <div class="merchandise_card">
            <div class="card_img">
                <img src="images/makeup+set.jpg" alt="メイクセット">
            </div>
            <div class="card_content">
                <h3 class="card_ttl">メイクセット</h3>
                <p class="explanation">便利なメイクアップセット</p>
                <div class="detail">
                    <p class="price">¥2,500</p>
                    <p class="condition">目立った傷や汚れなし</p>
                </div>
            </div>
        </div>
-->
    </section>

<!---------------------- マイリスト ---------------------->
<!--
@if ($tab === 'my_list')

@endif
-->

</div>
@endsection