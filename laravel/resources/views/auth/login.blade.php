@extends('common/app')

@section('title', '投稿一覧')

@section('content')

    <div class="wrapper">
        @include('common/nav')
        <div class="register-content">
            <div class="register-content-main">
                <div class="register-content-padding">
                    <div class="register-content-logo">
                        <a href="{{ route('products.index') }}">zaico_books</a>
                    </div>
                    <div class="register-content-register">
                        @include('common/error_card_list')
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="md-form">
                                <label for="email">メールアドレス</label>
                                <input class="form-control" type="text" id="email" name="email" required value="{{ old('email') }}">
                            </div>

                            <div class="md-form">
                                <label for="password">パスワード</label>
                                <input class="form-control" type="password" id="password" name="password" required>
                            </div>

                            <input type="hidden" name="remember" id="remember" value="on">

                            <div class="text-left">
                                <a href="{{ route('password.request') }}" class="card-text">パスワードを忘れた方</a>
                            </div>

                            <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">ログイン</button>

                            <a href="{{ route('login.guest') }}" class="btn btn-default btn-block p-3">
                                かんたんログイン
                            </a>
                        </form>

                        <div class="mt-0">
                            <a href="{{ route('register') }}" class="card-text">ユーザー登録はこちら</a>
                        </div>
                    </div>
                </div>
            </div>
            @include('common/footer')
        </div>
    </div>
