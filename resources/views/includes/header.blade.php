<header class="header fixed-top">
    <div class="row">
		<div class="col-12 col-sm-6">
			<a href="#"><img src="{{ asset('images/logo.svg') }}" class="logo" /></a>
		</div>
		<div class="col-12 col-sm-6 text-right d-none d-sm-none d-md-block">
			<ul class="list-unstyled color__black">
				<li class="d-inline-block text-center dropdown">
					<button class="btn dropdown-toggle slanguage-show-desktop" type="button" data-toggle="dropdown">
                        <img src="{{ asset('images/ico_flags_th.svg') }}" width="32" height="32" /> {{ __('default.nav_lang_thai') }}
					<span class="caret"></span></button>
					<!--ul class="slanguage dropdown-menu">
                        <li>
                            <a href="{{ URL::to('lang/th') }}">
                                <img src="{{ asset('images/ico_flags_th.svg') }}" width="32" height="32" /> {{ __('default.nav_lang_thai') }}
                            </a>
                        </li>
						<li>
                            <a href="{{ URL::to('lang/en') }}">
                                <img src="{{ asset('images/ico_flags_en.svg') }}" width="32" height="32" /> {{ __('default.nav_lang_eng') }}
                            </a>
                        </li>
					</ul-->
				</li>
				<li class="d-inline-block text-center">
					<div class="">
						<a href="">
                            <img src="{{ asset('images/ico_phone.svg') }}" width="32" height="32" />
                        </a>
                        <label class="">
                            <a href="" class="font--color-special">{{ __('default.nav_phone_number')}}</a>
                        </label>
					</div>
                    <div><small>{{ __('default.nav_slug') }}</small></div>
				</li>
			</ul>
		</div>
	</div>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light bg--color-secondary">
	  	<button class="navbar-toggler" 
	  			type="button" 
	  			data-toggle="collapse" 
	  			data-target="#navbarTogglerMainMenu" 
	  			aria-controls="navbarTogglerMainMenu" 
	  			aria-expanded="false" 
	  			aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="d-block d-sm-block d-md-none dropdown">
			<a href="tel:+6645958888" class="txt-phonnumber-mobile">
                <img src="/asset/images/ico_mobile_w.png" width="16">&nbsp;045-958-888
            </a>
			<button class="btn dropdown-toggle slanguage-show-mobile " type="button" data-toggle="dropdown">
                <img src="{{ asset('images/ico_flags_th.svg') }}" width="32" height="32" /> TH
			<span class="caret"></span></button>
			<ul class="slanguage dropdown-menu">
				<li><a href="/switchlang/th/"><img src="{{ asset('images/ico_flags_th.svg') }}" width="32" height="32" /> {{ __('default.nav_lang_thai') }}</a></li>
				<li><a href="/switchlang/en/"><img src="{{ asset('images/ico_flags_en.svg') }}" width="32" height="32" /> {{ __('default.nav_lang_eng') }}</a></li>
			</ul>
		</div>

	  	<div class="collapse navbar-collapse" id="navbarTogglerMainMenu">
	    	<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      		<li class="nav-item">
	        		<a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link" href="/aboutus">About us</a>
				</li>
	      		<li class="nav-item">
	        		<a class="nav-link" href="/articles">Articles</a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link" href="/doctor">Doctor</a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link" href="/services">Services</a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link" href="/">Contact</a>
	      		</li>
	    	</ul>
	    	<form class="form-inline my-2 my-lg-0">
	      		<input class="form-control mr-sm-2 boxSearch" type="text" placeholder="Search" aria-label="Search">
	    	</form>
	  	</div>
	</nav>
</header>
