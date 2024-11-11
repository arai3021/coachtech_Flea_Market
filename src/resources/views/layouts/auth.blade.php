<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COACHTECHフリマ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layouts/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header_layout">
            <div class="coachtech_flea_market">
                <a class="coachtech_flea_market_title" href="/">
                    <img class="coachtech_flea_market_logo">
                </a>
            </div>
            <div class="search_box">
                <input type="search" name="search_space" placeholder="なにをお探しですか？">
            </div>
            <div class="nav">
                <a href="/logout">ログアウト</a>
                <a href="/mypage">マイページ</a>
                <a href="/sell">出品</a>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>