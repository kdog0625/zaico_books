@extends('common/app')

@section('title', '在庫詳細')

@section('content')


<div class="wrapper">
  @include('common/nav')
  <div class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-md-9">
        <div class="card my-4">
          <div class="card-body">
            <div class="d-flex flex-row row">
              <span class="avatar-form image-picker">
                  <input type="file" name="avatar" class="d-none" accept="image/png,image/jpeg,image/gif" id="avatar" />
                  <label for="avatar" class="d-inline-block">
                      <img src="/images/avatar-default.svg" class="rounded-circle" style="object-fit: cover; width: 200px; height: 200px;">
                  </label>
              </span>
              <div class="col-9">
                <div class="row mb-2">
                  <div class="col-5">
                    <h2 class="h5 card-title font-weight-bold mb-3">{{ $user->name }}</h2>
                    <h2 class="h5 card-title font-weight-bold mb-3">{{ $user->email }}</h2>
                    <h2 class="h5 card-title font-weight-bold mb-3">パスワードを変更する</h2>
                    <h2 class="h5 card-title font-weight-bold mb-3">{{ $user->created_at }}</h2>
                  </div>
                </div>
              </div>
              <a href="{{ route('users.edit', ['user' => Auth::user()]) }}">aaa</a>
    <div class="wrapper">
        @include('common/nav')
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="card my-4">
                        <div class="card-body">
                            <div class="d-flex flex-row row">
                                <div class="col-3 text-center">
                                    <img class="profile-icon rounded-circle" src="" alt="プロフィールアイコン">
                                </div>
                                <div class="col-9">
                                    <div class="row mb-2">
                                        <div class="col-5">
                                            <h2 class="h5 card-title font-weight-bold mb-3">{{ $user->name }}</h2>
                                            <h2 class="h5 card-title font-weight-bold mb-3">{{ $user->email }}</h2>
                                            <h2 class="h5 card-title font-weight-bold mb-3">パスワードを変更する</h2>
                                            <h2 class="h5 card-title font-weight-bold mb-3">{{ $user->created_at }}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('common/footer')
        </div>

@endsection
