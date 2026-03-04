<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>

<header>
    <h2>My Website</h2>
    <a href="/home">Trang chủ</a> |
    <a href="/contact">Liên hệ</a>
    <hr>
</header>

@yield('content')

<hr>
<footer>
    <p>Bản quyền © 2026</p>
</footer>

</body>
</html>