<!DOCTYPE html>
<html >
<head>
    <title>MyBlog</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-inverse navbar-fixed-top mt-2 ">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="{{ route('welcome') }}" class="navbar-brand">My Blog</a>
                </div>
                <div class="navbar nav-item">
                    <a href="{{ route('login') }}" class="active mr-2">Log in</a>|
                    <a href="{{ route('register') }}" class="active ml-2">Sign up</a>
                </div>
            </div>
        </nav>
        <hr>

    </div>
    @yield('content')
</body>
</html>
