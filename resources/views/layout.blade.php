<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <title>@section('title') NewsSite @show</title>
</head>
<body class="bg-dark text-white">
    <div class="content container-fluid">
        <x-blocks.nav />
        @yield('content')
    </div>
    <footer class="footer bg-dark text-white-50 text-center">
        <p>Copyright &copy; <?= date("Y"); ?> Igor Eliseev</p>
    </footer>
</body>
</html>
