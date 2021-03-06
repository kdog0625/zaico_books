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
