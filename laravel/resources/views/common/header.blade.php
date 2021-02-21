<nav class="navbar navbar-expand navbar-dark header-back">
<div class="container d-flex justify-content-center px-4">
  <a class="navbar-brand nav-link font-weight-bold bg-guest title-p_auto" href="/"><i class="fas fa-warehouse mr-1"></i>zaico_books</a>
    <form method="GET" action="{{ route('tweets.index') }}" class="search-form form-inline w-25 d-none d-md-flex">
      <span></span>
      <input class="form-control w-100" name="search" type="search" placeholder="シェアを検索" value="{{ $search ?? old('search') }}">
    </form>
  <ul class="navbar-nav">
    @guest 
    <li class="nav-item user_interval">
      <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-plus mr-1"></i>ユーザー登録</a>
    </li>
    @endguest

    @guest 
    <li class="nav-item user_interval">
      <a class="nav-link" href=""><i class="fas fa-sign-in-alt mr-1"></i>ログイン</a>
    </li>
    @endguest

    @guest 
      <li class="nav-item user_interval">
        <a class="nav-link bg-guest" href=""><i class="fas fa-user-check mr-1"></i>ゲストログイン</a>
      </li>
    @endguest
  </ul>
</div>
</nav>