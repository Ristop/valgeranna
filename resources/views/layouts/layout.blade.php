<!DOCTYPE html>
<html lang="en" manifest="/offline.appcache">
<head>
    @include('layouts.head')
</head>
<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
</body>
</html>