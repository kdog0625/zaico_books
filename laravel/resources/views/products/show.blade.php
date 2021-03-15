@extends('common/app')

@section('title', '在庫詳細')

@section('content')

    <div class="wrapper">
        @include('common/nav')
        <div class="container">
            <div class="main-content">
                <h2>在庫詳細</h2>
                <div id="table_box">
                    <table class="show">
                        <tbody>
                        <tr>
                            <th>型番</th>
                            <td>{{ $product->zaico_number }}</td>
                        </tr>
                        <tr>
                            <th>商品名</th>
                            <td>{{ $product->zaico_name }}</td>
                        </tr>
                        <tr>
                            <th>カテゴリー</th>
                            <td>{{ $product->category }}</td>
                        </tr>
                        <tr>
                            <th>在庫数</th>
                            <td>{{ $product->zaico_count }}</td>
                        </tr>
                        <tr>
                            <th>保管場所</th>
                            <td>{{ $product->zaico_storage }}</td>
                        </tr>
                        <tr>
                            <th>作成日</th>
                            <td>{{ $product->created_at }}</td>
                        </tr>
                        <tr>
                            <th>更新日</th>
                            <td>{{ $product->updated_at }}</td>
                        </tr>
                        <tr>
                            <th>公開/非公開</th>
                            @if($product->status == 0)
                                <td>非公開</td>
                            @else
                                <td>公開</td>
                            @endif
                        </tr>
                        </tbody>
                    </table>
                    <div class="p-2 bd-highlight">
                        <div id="image_box">
                            @if($product->zaico_image)
                                <img src="/images/Product/{{ $product->zaico_image }}">
                            @endif
                        </div>
                        <div class="d-flex">
                            <button type="button"  class="btn btn-primary" onclick="location.href='{{ route('products.edit', ['product' => $product]) }}'">更新する</button>
                            <form method="POST" action="{{ route('products.destroy', ['product' => $product]) }}">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit" class="btn btn-danger">削除する</button>
                            </form>
                            <button type="button"  class="btn btn-light" onclick="history.back()">戻る</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('common/footer')
    </div>

@endsection
