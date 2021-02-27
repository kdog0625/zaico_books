@extends('common/app')

@section('title', '在庫一覧')

@section('content')

<div class="wrapper">
  @include('common/nav')
  <div class="container">
    <div class="card mb-4 col-3 main_left"> 
        <div class="card-body">
          <li>ユーザー1</li>
        </div>
    </div>
    <div class="card main_right">   
      <table class="main_content"> 
        <tbody>
          <tr>
            <th>型番</th>
            <th style="width: 29.3%;">商品名</th>
            <th style="width: 12.8%;">在庫数</th>
            <th style="width: 23.4%;">カテゴリ</th>
            <th style="width: 10.0%;">画像</th>
          </tr>
          @if($tweets)
            @foreach($tweets as $tweet)
              <tr>
                <th><a class="dropdown-item" href="{{ route('tweets.show', ['tweet' => $tweet]) }}">{{ $tweet->zaico_number }}</a></th>
                <th>{{ $tweet->zaico_name }}</th>
                <th>{{ $tweet->zaico_count }}</th>
                <th>{{ $tweet->category }}</th>
                <th><img class="zaico_ima" src="/images/{{ $tweet->zaico_image }}"></th>
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
  @include('common/footer')
</div>  

@endsection