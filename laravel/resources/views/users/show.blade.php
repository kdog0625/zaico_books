@extends('common/app')

@section('title', '在庫詳細')

@section('content')
    <div class="wrapper">
        @include('common/nav')
        <div class="main_content">
            <h1>アカウント情報</h1>
            <table id="user_show">
                <tbody>
                <tr>
                    <th>メールアドレス</th>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <th>名前</th>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <th>パスワード</th>
                    <td><a href="{{ route('password.request') }}">パスワードを変更する</a></td>
                </tr>
                <tr>
                    <th>ユーザID</th>
                    <td>{{ $user->own_id }}</td>
                </tr>
                <tr>
                    <th>性別</th>
                    @if($user->sex == 0)
                        <td></td>
                    @else
                        <td>{{ $user->sex }}</td>
                    @endif
                </tr>
                <tr>
                    <th>誕生日</th>
                    <td>{{ $user->birthday }}</td>
                </tr>
                <tr>
                    <th>プロフィール詳細</th>
                    <td>{{ $user->prof_content }}</td>
                </tr>
                </tbody>
            </table>
            <div class="prof-imagelist">
                @if(!$user->prof_image)
                <img class="user_ima" src="/images/User/default.png">
                @else
                    <img class="user_ima" src="/images/User/{{ $user->prof_image }}">
                @endif
            </div>
            <div class="d-flex">
                <button type="button"  class="btn btn-primary" onclick="location.href='{{ route('users.edit', ['user' => $user]) }}'">更新する</button>
                <form method="POST" action="">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button type="submit" class="btn btn-danger">退会する</button>
                </form>
                <button type="button"  class="btn btn-light" onclick="history.back()">戻る</button>
            </div>
        </div>
        @include('common/footer')
    </div>

@endsection
