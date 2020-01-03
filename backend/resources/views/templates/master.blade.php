<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>@yield('title')</title>

    <link href="https://unpkg.com/sleek-dashboard/dist/assets/css/sleek.min.css" rel="stylesheet"/>
</head>
<body class="app">

    @section('sidebar')

    @show

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <script src="https://unpkg.com/sleek-dashboard/dist/assets/js/sleek.bundle.js"></script>
    </footer>
</body>
</html>
