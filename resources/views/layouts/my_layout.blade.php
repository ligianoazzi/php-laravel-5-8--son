<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @yield('css')
</head>
<body>
    <h1>@yield('title')</h1>
    <main>
        @yield('content')
    </main>
    <footer>Footer by Ldaazzi</footer>
    @yield('script')
</body>
</html>