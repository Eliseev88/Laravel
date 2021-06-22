<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('welcome') }}">NewsSite</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link
                        @if(request()->routeIs("welcome")) active @endif"
                       href="{{ route('welcome') }}">Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link
                        @if(Illuminate\Support\Facades\Route::currentRouteName() == 'news.category') active @endif"
                       href="{{ route('news.category') }}">Categories
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link
                        @if(Illuminate\Support\Facades\Route::currentRouteName() == 'parse') active @endif"
                       href="{{ route('parse') }}">YandexNews
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('account') }}" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('logout') }}}">Logout</a></li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
