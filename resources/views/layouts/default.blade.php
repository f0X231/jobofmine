<!doctype html>
<html>
<head>
   @include('includes.head')
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    {{-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PR8PF2T" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> --}}
    {{-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=G-D3J2E51CY4" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> --}}
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5PX36KKB" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    <!-- End Google Tag Manager (noscript) -->

    @include('includes.header')
    <div id="wrapper"> 
        @yield('content')
    </div>
    @include('includes.footer')
</body>
</html>