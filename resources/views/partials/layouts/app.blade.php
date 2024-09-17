<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="{{ !Request::is('dashboard*') ? 'bg-slate-200 min-h-screen flex flex-col' : '' }}">

    @yield('container')

</body>

</html>