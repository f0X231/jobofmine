<!doctype html>
<html>
<head>
   @include('includes.head')
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PR8PF2T" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    @include('includes.header')
    <div id="wrapper"> 
        @yield('content')
    </div>
    @include('includes.footer')
</body>
</html>