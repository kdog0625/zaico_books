@extends('common/app')

@section('title', '在庫編集')

@section('content')

    <div class="wrapper">
        @include('common/nav')
        <div class="container">
            <div class="main-content">
                <h1>在庫編集</h1>
                <form method="POST" action="" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="create_zaico_number">
                        <label>型番</label>
                        <input type="text" name="zaico_number" class="form-control" required value="{{ $product->zaico_number ?? old('zaico_number') }}">
                        <div class="wrapper">
                            @include('common/nav')
                            <div class="container">
                                <div class="main-content">
                                    <h1>在庫編集</h1>
                                    @include('common/error_card_list')
                                    <form method="POST" action="{{ route('products.update', ['product' => $product]) }}" enctype="multipart/form-data">
                                        @method('PATCH')
                                        @csrf
                                        <div class="create_zaico_number">
                                            <label>型番</label>
                                            <input type="text" name="zaico_number" class="form-control" required value="{{ $product->zaico_number ?? old('zaico_number') }}">
                                        </div>
                                        <div class="create_zaico_name">
                                            <label>商品名</label>
                                            <input type="text" name="zaico_name" class="form-control" required value="{{ $product->zaico_name ?? old('zaico_name') }}">
                                        </div>
                                        <div class="create_zaico_number">
                                            <label>在庫数</label>
                                            <input type="text" name="zaico_count" class="form-control" required value="{{ $product->zaico_count ?? old('zaico_count') }}">
                                        </div>
                                        <div class="create_zcategory">
                                            <label>カテゴリー</label>
                                            <input type="text" name="category" class="form-control"  value="{{ $product->category ?? old('category') }}">
                                        </div>
                                        <div class="create_zaico_number">
                                            <label>保管場所</label>
                                            <input type="text" name="zaico_storage" class="form-control"  value="{{ $product->zaico_storage ?? old('zaico_storage') }}">
                                        </div>
                                        <div class="create_zaico_image">
                                            <label>画像</label>
                                            <input type="file" name="zaico_image" class="form-control"  value="{{ $product->zaico_image ?? old('zaico_image') }}">
                                        </div>
                                        <div class="create_content">
                                            <label></label>
                                            <textarea name="content" class="form-control" rows="16" placeholder="説明">{{ $product->content ?? old('content') }}</textarea>
                                        </div>
                                        <button type="submit" class="btn blue-gradient btn-block">投稿する</button>
                                    </form>
                                </div>
                            </div>
                            @include('common/footer')
                        </div>
                    </div>
                @include('common/footer')
            </div>
        </div>
    </div>

@endsection
