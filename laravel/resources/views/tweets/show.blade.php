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
                            <td>{{ $tweet->zaico_number }}</td>
                        </tr>
                        <tr>
                            <th>商品名</th>
                            <td>{{ $tweet->zaico_name }}</td>
                        </tr>
                        <tr>
                            <th>カテゴリー</th>
                            <td>{{ $tweet->category }}</td>
                        </tr>
                        <tr>
                            <th>在庫数</th>
                            <td>{{ $tweet->zaico_count }}</td>
                        </tr>
                        <tr>
                            <th>保管場所</th>
                            <td>{{ $tweet->zaico_storage }}</td>
                        </tr>
                        <tr>
                            <th>作成日</th>
                            <td>{{ $tweet->created_at }}</td>
                        </tr>
                        <tr>
                            <th>更新日</th>
                            <td>{{ $tweet->updated_at }}</td>
                        </tr>
                        <tr>
                            <th>公開/非公開</th>
                            @if($tweet->status == 0)
                                <td>非公開</td>
                            @else
                                <td>公開</td>
                            @endif
                        </tr>
                        {{--                        <tr>--}}
                        {{--                            <th>画像</th>--}}
                        {{--                            <td>{{ $tweet->zaico_image }}</td>--}}
                        {{--                        </tr>--}}
                        </tbody>
                    </table>
                    <div id="image_box">
                        @if($tweet->zaico_image)
                            {{ $tweet->zaico_image }}
                        @endif
                    </div>
                    <div class="d-flex p-2 bd-highlight">
                        <button type="button"  class="btn btn-primary" onclick="location.href='{{ route('tweets.edit', ['tweet' => $tweet]) }}'">更新する</button>
                        <form method="POST" action="{{ route('tweets.destroy', ['tweet' => $tweet]) }}">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <button type="submit" class="btn btn-danger">削除する</button>
                        </form>
                        <button type="button"  class="btn btn-light" onclick="history.back()">戻る</button>
                    </div>
                </div>
            </div>
        </div>
        @include('common/footer')
    </div>

@endsection
