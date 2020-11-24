<header class="header fixed-top">
    <div class="row">
		<div class="col-12 col-sm-6"><a href="/home"><img src="{{ asset('images/logo.svg') }}" class="logo" /></a></div>
		<div class="col-12 col-sm-6 text-right d-none d-sm-none d-md-block">
			
			<div class="row">
				<div class="col-6 text-right">
					<div class="d-inline-block text-center dropdown">
						<button class="btn dropdown-toggle" 
								type="button" 
								id="dropdownMenuButton" 
								data-toggle="dropdown" 
								aria-haspopup="true" 
								aria-expanded="false">
							<img src="{{ asset('images/ico_flags_th.svg') }}" class="header_ico_navbar" /> {{ __('default.nav_lang_thai') }}
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="{{ URL::to('lang/th') }}">
								<img src="{{ asset('images/ico_flags_th.svg') }}" class="header_ico_navbar" /> {{ __('default.nav_lang_thai') }}
							</a>
							<a class="dropdown-item" href="{{ URL::to('lang/en') }}">
								<img src="{{ asset('images/ico_flags_en.svg') }}" class="header_ico_navbar" /> {{ __('default.nav_lang_eng') }}
							</a>
						</div>
					</div>
				</div>
				<div class="col-2 text-right">
					<a href="">
						<img src="{{ asset('images/ico_phone.svg') }}" class="header_ico_navbar" />
					</a>
				</div>
				<div class="col-4 text-left">
					<a href="">
						<div class="navbar__phone">
							<strong class="navbar__phone__number">{{ __('default.nav_phone_number')}}</strong>
							<p class="navbar__phone__txt">{{ __('default.nav_slug') }}</p>
						</div>
					</a>
				</div>
			</div>

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
	        		<a class="nav-link color__black" href="/">
						{{ __('default.nav_menu_home') }}
					</a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link color__black" href="/aboutus">
						{{ __('default.nav_menu_aboutus') }}
					</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link color__black" href="/services">
					  {{ __('default.nav_menu_services') }}
				  </a>
				</li>
	      		<li class="nav-item">
	        		<a class="nav-link color__black" href="/doctor">
						{{ __('default.nav_menu_doctor') }}
					</a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link color__black" href="/articles">
						{{ __('default.nav_menu_articles') }}
					</a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link color__black" href="/">
						{{ __('default.nav_menu_contact') }}
					</a>
	      		</li>
	    	</ul>
	    	<form class="form-inline my-2 my-lg-0">
	      		<input class="form-control mr-sm-2 boxSearch" type="text" placeholder="Search" aria-label="Search">
	    	</form>
	  	</div>
	</nav>
</header>
