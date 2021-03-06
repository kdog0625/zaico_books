@extends('common/app')

@section('title', '在庫一覧')

@section('content')

<div class="wrapper">
  @include('common/nav')
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
            <th>型番</th>
            <th style="width: 30.3%;">商品名</th>
            <th style="width: 12.8%;">在庫数</th>
            <th style="width: 33.4%;">カテゴリ</th>
            <th style="width: 10.0%;">画像</th>
            <th style="width: 20.0%;">更新日</th>
          </tr>
          @if($tweets)
            @foreach($tweets as $tweet)
              <tr>
                <th class="tr-white"><a class="dropdown-item" href="{{ route('tweets.show', ['tweet' => $tweet]) }}">{{ $tweet->zaico_number }}</a></th>
                <th class="tr-white">{{ $tweet->zaico_name }}</th>
                <th class="tr-white tr-right">{{ $tweet->zaico_count }}</th>
                <th class="tr-white">{{ $tweet->category }}</th>
                <th class="tr-white">
                @if($tweet->zaico_image)
                    <img class="zaico_ima" src="/images/{{ $tweet->zaico_image }}">
                @endif
                </th>
                <th class="tr-white">{{ $tweet->updated_at }}</th>
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
