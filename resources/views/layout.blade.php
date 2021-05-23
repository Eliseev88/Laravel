<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body class="d-flex h-100 text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column" style="max-width: 42rem;">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{ route('welcome') }}" class="nav-link @yield('nav1')" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="{{ route('news.category') }}" class="nav-link @yield('nav2')">Categories</a></li>
                <li class="nav-item"><a href="{{ route('news.add') }}" class="nav-link @yield('nav3')">Add news</a></li>
            </ul>
        </header>
        <main class="px-3 content" style="margin-top: 10%; flex: 1 0 auto;">
            @yield('content')
        </main>
        <footer class="text-white-50" style="margin-top: 200px">
            <p>Copyright &copy; <?php echo date("Y");?> Igor Eliseev</p>
        </footer>
    </div>
</body>
</html>
