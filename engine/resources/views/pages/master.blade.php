<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
    @stack('aditional-css')
</head>
<body>
    <div>
        @yield('preloader')
        @include('pages.navbar')
        @yield('content')
        @include('pages.footer')
    </div>    

    @stack('aditional-js')
</body>
</html>