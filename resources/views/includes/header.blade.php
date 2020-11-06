<div class="navbar">
    <div class="navbar-inner">
        <a id="logo" href="/">Single Malt</a>
        <ul class="nav">
            <li><a href="/">Home</a></li>
            <li><a href="/about">{{ trans('default.nav_about') }}</a></li>
            <li><a href="/contact">{{ trans('default.nav_contact') }}</a></li>
            <li><a href="{{ URL::to('lang/en') }}">ENGLISH</a></li>
            <li><<a href="{{ URL::to('lang/th') }}">THAILAND</a></li>
        </ul>
    </div>
</div> 
