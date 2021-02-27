<nav class="navbar navbar-expand navbar-dark header-back">
<div class="container d-flex justify-content-center px-4">
    <a class="navbar-brand nav-link font-weight-bold bg-guest title-p_auto" href="/"><i class="fas fa-warehouse mr-1"></i>zaico_books</a>
    @auth
    <form method="GET" action="{{ route('tweets.index') }}" class="search-form form-inline w-25 d-none d-md-flex">
      <span></span>
      <input class="form-control w-100" name="search" type="search" placeholder="シェアを検索" value="{{ $search ?? old('search') }}">
    </form>
    @endauth
    <ul class="navbar-nav">
    @auth
    <li class="nav-item">
      <a class="nav-link" href="{{ route('tweets.create') }}"><i class="fas fa-pen mr-1"></i>投稿する</a>
    </li>
    @endauth

    @auth
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <button class="dropdown-item" type="button"
                onclick="location.href=''">
          マイページ
        </button>
        <div class="dropdown-divider"></div>
        <button form="logout-button" class="dropdown-item" type="submit">
          ログアウト
        </button>
      </div>
    </li>
    <form id="logout-button" method="POST" action="{{ route('logout') }}"> {{--この行を編集--}}
      @csrf
    </form>
    @endauth
  </ul>
</div>
</nav>