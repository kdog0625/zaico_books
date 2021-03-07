@extends('common/app')

@section('title', '在庫一覧')

@section('content')

    <div class="wrapper">
        @include('common/nav')
        <div class="search-form">
            <form method="GET" action="{{ route('tweets.store') }}" enctype="multipart/form-data">
                <div class="seach-controls rounded mb-2 p-2">
                    <div class="d-flex justify-content-between flex-column flex-xl-row">
                        <div class="row ml-0 align-items-center">
                            <div class="col-auto p-0 pr-2 text-center">
                                <select id="search_conditions_0" name="search_conditions_0">
                                    <option value="not-select">検索対象を選択して下さい</option>
                                    <option value="not-select">型番</option>
                                    <option value="not-select">商品名</option>
                                    <option value="not-select">在庫数</option>
                                    <option value="not-select">カテゴリー</option>
                                    <option value="not-select">保管場所</option>
                                    <option value="not-select">説明文</option>
                                </select>
                            </div>
                            <input type="submit" name="search" value="検索" class="btn btn-primary">
                        </div>
                    </div>
                </div>
                <div class="sorting mt-2 mt-xl-0">
                    <div class="item_box row m-0">
                        <div class="col-auto p-0 pr-2"></div>
                    </div>
                </div>
            </form>
        </div>
        <div class="container">
            <div class="card mb-4 main_left">
                <div class="card-header text-center"><i class="fas fa-tags"></i>オススメユーザー</div>
                <div class="card-body py-3 mx-auto">
                    <p>ユーザー1</p>
                    <p>ユーザー2</p>
                    <p>ユーザー3</p>
                    <p>ユーザー4</p>
                    <p>ユーザー5</p>
                </div>
            </div>
            <div class="card main_right">
                <table class="main_content">
                    <tbody>
                    <tr>
                        <th class="text-center" style="width: 34.2%;">型番</th>
                        <th class="text-center" style="width: 20.9%;">商品名</th>
                        <th class="text-center" style="width: 11.3%;">在庫数</th>
                        <th class="text-center" style="width: 20.9%;">カテゴリ</th>
                        <th class="text-center" style="width: 11.3%;">画像</th>
                        <th class="text-center" style="width: 8.6%;">更新日</th>
                        <th class="text-center" style="width: 2.0%;"></th>
                    </tr>
                    @if($tweets)
                        @foreach($tweets as $tweet)
                            <tr>
                                <td class="tr-white"><a class="dropdown-item" href="{{ route('tweets.show', ['tweet' => $tweet]) }}">{{ $tweet->zaico_number }}</a></td>
                                <td class="tr-white"><a class="dropdown-item" href="{{ route('tweets.show', ['tweet' => $tweet]) }}">{{ $tweet->zaico_name }}</a></td>
                                <td class="tr-white tr-right"><a class="dropdown-item" href="{{ route('tweets.show', ['tweet' => $tweet]) }}">{{ $tweet->zaico_count }}</a></td>
                                <td class="tr-white"><a class="dropdown-item" href="{{ route('tweets.show', ['tweet' => $tweet]) }}">{{ $tweet->category }}</a></td>
                                <td class="tr-white">
                                    @if($tweet->zaico_image)
                                        <a class="dropdown-item" href="{{ route('tweets.show', ['tweet' => $tweet]) }}"><img class="zaico_ima" src="/images/{{ $tweet->zaico_image }}"></a>
                                    @endif
                                </td>
                                <td class="tr-white"><a class="dropdown-item" href="{{ route('tweets.show', ['tweet' => $tweet]) }}">{{ $tweet->updated_at->format('Y/m/d') }}</a></td>
                                <td class="tr-white"><a class="dropdown-item" href="{{ route('tweets.show', ['tweet' => $tweet]) }}"><i class="fas fa-pen m-0"></i></a></td>
                            </tr>
                        @endforeach
                    @endif
                    <!-- @if($user_id)
                        @foreach($items as $item)
                            <tr>
                              <th><a class="dropdown-item" href="">{{ $item->zaico_number }}</a></th>
                <th>{{ $item->zaico_name }}</th>
                <th>{{ $item->zaico_count }}</th>
                <th>{{ $item->category }}</th>
                <th>{{ $item->zaico_image }}</th>
                <th>{{ $item->status }}</th>
              </tr>
            @endforeach
                    @endif  -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('common/footer')

    </div>
@endsection
