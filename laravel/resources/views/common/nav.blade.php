<nav class="navbar navbar-expand navbar-dark header-back">
    <div class="container d-flex px-4">
        <a class="navbar-brand nav-link font-weight-bold title-p_auto" href="/"><i class="fas fa-warehouse mr-1"></i>zaico_books</a>
        <ul class="navbar-nav">
            @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tweets.create') }}"><i class="fas fa-pen mr-1"></i>投稿する</a>
                </li>
            @endauth

            @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle bg-guest" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>{{ Auth::user()->name }}さんログイン中
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <button class="dropdown-item" type="button"
                                onclick="location.href='{{ route('users.show', ['user' => Auth::user()]) }}'">
                            マイページ
                        </button>
                        <div class="dropdown-divider"></div>
                        <button form="logout-button" class="dropdown-item" type="submit">
                            ログアウト
                        </button>
                    </div>
                </li>
                <form id="logout-button" method="POST" action="{{ route('logout') }}">
                    @csrf
                </form>
            @endauth
        </ul>
    </div>
</nav>
