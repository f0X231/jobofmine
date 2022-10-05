<header class="header fixed-top">
	<!-- Top Section -->
    <div class="row">
		<div class="col-12 col-sm-6 navbarLogo">
			<a href="{{ URL::to('home') }}">
				<img src="{{ asset('images/logo.svg') }}" class="logo" />
			</a>
		</div>
		<div class="col-12 col-sm-6 text-right d-none d-sm-none d-md-block">
			<!-- Language Desktop -->
			<ul class="ulNoDist colorBlack navbarInfo">
				<li class="displayInline text-center dropdown navbarInfo__li">
					<button class="btn dropdown-toggle fontSize125rem" type="button" data-toggle="dropdown">
						<img src="{{ asset('images/ico_flags_th.svg') }}" class="icoNavbar" /> {{ __('default.nav_lang_thai') }}
						<span class="caret"></span>
					</button>
					<ul class="slanguage dropdown-menu">
						<li>
							<a href="{{ URL::to('lang/th') }}">
								<img src="{{ asset('images/ico_flags_th.svg') }}" class="icoNavbar" /> {{ __('default.nav_lang_thai') }}
							</a>
						</li>
						<li>
							<a href="{{ URL::to('lang/en') }}">
								<img src="{{ asset('images/ico_flags_en.svg') }}" class="icoNavbar" /> {{ __('default.nav_lang_eng') }}
							</a>
						</li>
					</ul>
				</li>
				<li class="displayInline text-left navbarInfo__li">
					<div class="">
						<a href="{{ __('default.nav_phone_number_href') }}">
							<img src="{{ asset('images/ico_phone.svg') }}" class="icoNavbar" />
						</a>
					</div>
				</li>
				<li class="displayInline text-center navbarInfo__li line__1height">
					<div class="navbarPhone">
						<label class="navbarPhoneLabel">
							<a href="{{ __('default.nav_phone_number_href')}} " class="colorPrimary">
								{{ __('default.nav_phone_number')}}
							</a>
						</label>
					</div>
					<div class="navbarTxt">{{ __('default.nav_slug') }}</div>
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
		
		<!-- Language Mobile -->
		<div class="d-block d-sm-block d-md-none dropdown">
			<a href="{{ __('default.nav_phone_number_href')}}">
				<img src="{{ asset('images/ico_phone.svg') }}" class="icoNavbarMini" /> {{ __('default.nav_phone_number')}}
            </a>
			<button class="btn dropdown-toggle slanguage-show-mobile" type="button" data-toggle="dropdown">
                <img src="{{ asset('images/ico_flags_th.svg') }}" class="icoNavbar" /> {{ __('default.nav_lang_thai') }}
				<span class="caret"></span>
			</button>
			<ul class="slanguage dropdown-menu">
				<li>
					<a href="{{ URL::to('lang/th') }}">
						<img src="{{ asset('images/ico_flags_th.svg') }}" class="icoNavbar" /> {{ __('default.nav_lang_thai') }}
					</a>
				</li>
				<li>
					<a href="{{ URL::to('lang/en') }}">
						<img src="{{ asset('images/ico_flags_en.svg') }}" class="icoNavbar" /> {{ __('default.nav_lang_eng') }}
					</a>
				</li>
			</ul>
		</div>

		<!-- Menu -->
	  	<div class="collapse navbar-collapse" id="navbarTogglerMainMenu">
	    	<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      		<li class="nav-item">
	        		<a class="nav-link colorBlack" href="{{ URL::to('home') }}">
						{{ __('default.nav_menu_home') }}
					</a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link colorBlack" href="{{ URL::to('aboutus') }}">
						{{ __('default.nav_menu_aboutus') }}
					</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link colorBlack" href="{{ URL::to('services') }}">
					  {{ __('default.nav_menu_services') }}
				  </a>
				</li>
	      		<li class="nav-item">
	        		<a class="nav-link colorBlack" href="{{ URL::to('doctor') }}">
						{{ __('default.nav_menu_doctor') }}
					</a>
	      		</li>
				  <li class="nav-item">
	        		<a class="nav-link colorBlack" href="{{ URL::to('psychiatrist') }}">
						{{ __('default.nav_menu_psychiatrist') }}
					</a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link colorBlack" href="{{ URL::to('articles') }}">
						{{ __('default.nav_menu_articles') }}
					</a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link colorBlack" href="{{ URL::to('home#googlemap') }}">
						{{ __('default.nav_menu_contact') }}
					</a>
				</li>
	    	</ul>
	    	<form class="form-inline my-2 my-lg-0">
				  <input class="form-control mr-sm-2 boxSearch" 
							type="text" 
							placeholder="{{ __('default.nav_menu_search') }}" 
							aria-label="{{ __('default.nav_menu_search') }}">
	    	</form>
	  	</div>
	</nav>
</header>
