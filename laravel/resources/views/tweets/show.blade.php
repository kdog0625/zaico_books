@extends('common/app')

@section('title', '在庫詳細')

@section('content')

<div class="wrapper">
  @include('common/nav')
  <div class="container">
    <div class="main-content">
        <tr>
          <th><a class="dropdown-item" href="{{ route('tweets.show', ['tweet' => $tweet]) }}">{{ $tweet->zaico_number }}</a></th>
          <th>{{ $tweet->zaico_name }}</th>
          <th>{{ $tweet->zaico_count }}</th>
          <th>{{ $tweet->category }}</th>
          <th>{{ $tweet->zaico_image }}</th>
        </tr>
    </div>
  </div>
  @include('common/footer')
</div>  

@endsection