@extends('common/app')

@section('title', '投稿一覧')

@section('content')

<div class="wrapper">
  @include('common/header')
    <div class="register-content">
      <div class="register-content-main">
        <div class="register-content-padding">
          <div class="register-content-logo">
            <a href="{{ route('tweets.index') }}">zaico_books</a>
          </div>
            <div class="register-content-register">
            <form method="POST" action="{{ route('register') }}">
                  @csrf
              <div class="md-form">
                <label for="own_id">ユーザーID</label>
                <input class="form-control" type="text" id="own_id" name="own_id" required value="{{ old('own_id') }}">
                <small>@+半角英数字の16文字以内で入力して下さい。</small>
              </div>
              <div class="md-form">
                <label for="name">ユーザー名</label>
                <!-- old関数を使うことで、入力した内容が保持された状態でユーザー登録画面を表示 -->
                <input class="form-control" type="text" id="name" name="name" required value="{{ old('name') }}">
                <small>16文字以内で入力して下さい。</small>
              </div>
              <div class="md-form">
                <label for="email">メールアドレス</label>
                <input class="form-control" type="text" id="email" name="email" required value="{{ old('email') }}" >
              </div>
              <div class="md-form">
                <label for="password">パスワード</label>
                <input class="form-control" type="password" id="password" name="password" required>
                <small>パスワードは半角英数字の8文字以内で入力して下さい。</small>
              </div>
              <div class="md-form">
                <label for="password_confirmation">パスワード(確認)</label>
                <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required>
              </div>
              <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">ユーザー登録</button>
            </form>
              <div class="mt-0">
                <a href="{{ route('login') }}" class="card-text">ログインはこちら</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  @include('common/footer')
</div>  