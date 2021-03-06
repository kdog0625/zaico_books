@extends('common/app')

@section('title', '在庫詳細')

@section('content')

    <div class="wrapper">
        @include('common/nav')
        <div class="container">
            <div class="main-content">
                <tr>
                    <th>
                        @if( Auth::id() === $tweet->user_id )<a class="dropdown-item" href="{{ route('tweets.edit', ['tweet' => $tweet]) }}">@endif
                            {{ $tweet->zaico_number }}
                        </a>
                    </th>
                    <th>{{ $tweet->zaico_name }}</th>
                    <th>{{ $tweet->zaico_count }}</th>
                    <th>{{ $tweet->category }}</th>
                    <th>{{ $tweet->zaico_image }}</th>
                    <form method="POST" action="{{ route('tweets.destroy', ['tweet' => $tweet]) }}">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                        <button type="submit" class="btn btn-danger">削除する</button>
                    </form>
                </tr>
            </div>
        </div>
        @include('common/footer')
    </div>

@endsection
