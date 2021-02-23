@extends('common/app')

@section('title', '在庫登録')

@section('content')

<div class="wrapper">
  @include('common/nav')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card mt-3">
          <div class="card-body pt-0">
            <div class="card-text">
              <form method="POST" action="{{ route('tweets.store') }}">
                @include('tweets.form')
                <button type="submit" class="btn blue-gradient btn-block">投稿する</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('common/footer')
</div>  

@endsection