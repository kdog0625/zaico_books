@extends('common/app')

@section('title', '在庫編集')

@section('content')

    <div class="wrapper">
        @include('common/nav')
        <div class="container">
            <div class="main-content">
                <h1>在庫編集</h1>
                <form method="POST" action="{{ route('tweets.update', ['tweet' => $tweet]) }}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="create_zaico_number">
                        <label>型番</label>
                        <input type="text" name="zaico_number" class="form-control" required value="{{ $tweet->zaico_number ?? old('zaico_number') }}">
                    </div>
                    <div class="create_zaico_name">
                        <label>商品名</label>
                        <input type="text" name="zaico_name" class="form-control" required value="{{ $tweet->zaico_name ?? old('zaico_name') }}">
                    </div>
                    <div class="create_zaico_number">
                        <label>在庫数</label>
                        <input type="text" name="zaico_count" class="form-control" required value="{{ $tweet->zaico_count ?? old('zaico_count') }}">
                    </div>
                    <div class="create_zcategory">
                        <label>カテゴリー</label>
                        <input type="text" name="category" class="form-control" required value="{{ $tweet->category ?? old('category') }}">
                    </div>
                    <div class="create_zaico_number">
                        <label>保管場所</label>
                        <input type="text" name="zaico_storage" class="form-control" required value="{{ $tweet->zaico_storage ?? old('zaico_storage') }}">
                    </div>
                    <div class="create_zaico_image">
                        <label>画像</label>
                        <input type="file" name="zaico_image" class="form-control" required value="{{ $tweet->zaico_image ?? old('zaico_image') }}">
                    </div>
                    <div class="create_content">
                        <label></label>
                        <textarea name="content" required class="form-control" rows="16" placeholder="説明">{{ $tweet->content ?? old('content') }}</textarea>
                    </div>
                    <button type="submit" class="btn blue-gradient btn-block">投稿する</button>
                </form>
            </div>
        </div>
        @include('common/footer')
    </div>

@endsection
