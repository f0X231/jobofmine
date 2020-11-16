<!doctype html>
<html>
<head>
   @include('includes.head')
</head>

<body>
    @include('includes.header')
    <div id="wrapper"> 
        @yield('content')
    </div>
    @include('includes.footer')
</body>
</html>