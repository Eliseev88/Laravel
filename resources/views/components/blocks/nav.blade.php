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
            </ul>
        </div>
    </div>
</nav>
