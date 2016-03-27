<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>
<body>

    @if (Auth::guest())
        @yield('loginData')
    @else
        @include('layouts.admin-header')
        @yield('content')
    @endif
</body>
</html>
