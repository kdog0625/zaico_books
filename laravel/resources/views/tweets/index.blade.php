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
        <div class="top-container">
            <div class="row">
                <div class="col-lg-2 col-sm-2">
                    <div class="sidebar-nav">
                        <div class="nav-sm nav nav-stacked"></div>
                        <ul class="nav nav-pills nav-stacked main-menu">
                           <li class="nav-title">
                               オススメユーザー
                           </li>
                            <li>
                                <a class="ajax-link" href="#">
                                    <span>オススメユーザー1</span>
                                </a>
                                <a class="ajax-link" href="#">
                                    <span>オススメユーザー2</span>
                                </a>
                                <a class="ajax-link" href="#">
                                    <span>オススメユーザー3</span>
                                </a>
                                <a class="ajax-link" href="#">
                                    <span>オススメユーザー4</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="content" class="col-lg-10 col-sm-10">
                    <div class="row">
                        <div class="box col-md-6">
                            <div class="box-inner">
                                <div class="box-content">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3 col-md-4">在庫合計</div>
                                        <div class="col-xs-9 col-sm-6 col-md-4">10</div>
                                        <div class="col-xs-3">
                                            <a href="#">
                                                <button class="btn btn-warning btn-xs">在庫確認</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main_content">
                        <div class="box">
                            <div class="box-inner">
                                <table class="box-content">
                                    <tbody>
                                    <tr>
                                        <th class="text-center" style="width: 16.0%;">型番</th>
                                        <th class="text-center" style="width: 30.0%;">商品名</th>
                                        <th class="text-center" style="width: 12.0%;">在庫数</th>
                                        <th class="text-center" style="width: 23.0%;">カテゴリ</th>
                                        <th class="text-center" style="width: 6.4%;">画像</th>
                                        <th class="text-center" style="width: 10.1%;">更新日</th>
                                        <th class="text-center" style="width: 2.5%;"></th>
                                    </tr>
                                    @if($tweets)
                                        @foreach($tweets as $tweet)
                                            <tr>
                                                <th class="tr-white clickable text-break">{{ $tweet->zaico_number }}</th>
                                                <th class="tr-white clickable text-break">{{ $tweet->zaico_name }}</th>
                                                <th class="tr-white tr-right clickable text-break">{{ $tweet->zaico_count }}</th>
                                                <th class="tr-white clickable text-break">{{ $tweet->category }}</th>
                                                <th class="tr-white clickable text-break">
                                                    @if($tweet->zaico_image)
                                                        <img class="zaico_ima" src="/images/{{ $tweet->zaico_image }}">
                                                    @endif
                                                </th>
                                                <th class="tr-white">{{ $tweet->updated_at->format('Y/m/d') }}</th>
                                                <th class="tr-white"><a href="{{ route('tweets.show', ['tweet' => $tweet]) }}"><i class="fas fa-pen m-0"></i></a></th>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
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
