@extends('common/app')

@section('title', '在庫一覧')

@section('content')

<div class="wrapper">
  @include('common/nav')
  <div class="container">
  
    <table class="main-content"> 
      <tbody>
        <tr>
          <th>型番</th>
          <th style="width: 29.3%;">商品名</th>
          <th style="width: 12.8%;">在庫数</th>
          <th style="width: 23.4%;">カテゴリ</th>
          <th style="width: 10.7%;">画像</th>
        </tr>
        @foreach($tweets as $tweet) 
        <tr>
          <th><a class="dropdown-item" href="{{ route('tweets.show', ['tweet' => $tweet]) }}">{{ $tweet->zaico_number }}</a></th>
          <th>{{ $tweet->zaico_name }}</th>
          <th>{{ $tweet->zaico_count }}</th>
          <th>{{ $tweet->category }}</th>
          <th>{{ $tweet->zaico_image }}</th>
        </tr>
        @endforeach
      </tbody>
    </table>
    
     
    
  </div>
  @include('common/footer')
</div>  

@endsection