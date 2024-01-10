<footer class="mainfooter">

  <div id="btn-line" class="float-right p-5">
    <a href="https://line.me/ti/p/@joyofminds" target="_blank">
      <img src="/images/icon-line-app.png" class="rounded-circle shadow" width="60">
    </a>
  </div>

  <div class="footer__middle">
    <div class="container">
      <div class="row">
        <div class="col-md-1 col-sm-4 col-12">
          <!--Column1-->
          <h4 class="footer__middle_title">
            <a href="{{ URL::to('home') }}" class="colorWhite">{{ __('default.footer_header_home') }}</a>
          </h4>
        </div>

        <div class="col-md-2 col-sm-4 col-12">
          <!--Column2-->
          <h4 class="footer__middle_title">
            <a href="{{ URL::to('aboutus') }}" class="colorWhite">{{ __('default.footer_header_aboutus') }}</a>
          </h4>
          <ul class="footet__list__item list-unstyled d-none d-sm-block">
            <li><a href="{{ URL::to('aboutus#vision_mission') }}" class="colorWhite">{{ __('default.footer_header_aboutus_name') }}</a></li>
            <li><a href="{{ URL::to('aboutus#vision_mission') }}" class="colorWhite">{{ __('default.footer_header_aboutus_vision') }}</a></li>
            <li><a href="{{ URL::to('aboutus#vision_mission') }}" class="colorWhite">{{ __('default.footer_header_aboutus_mission') }}</a></li>
            <li><a href="{{ URL::to('aboutus#gallery') }}" class="colorWhite">{{ __('default.footer_header_aboutus_gallery') }}</a></li>
          </ul>
        </div>

        <div class="col-md-3 col-sm-4 col-12">
          <!--Column3-->
          <h4 class="footer__middle_title">
            <a href="{{ URL::to('services') }}" class="colorWhite">{{ __('default.footer_header_service') }}</a>
          </h4>
          <ul class="footet__list__item list-unstyled d-none d-sm-block">
            @foreach ($services as $item)
              <li><a href="{{$item['slug']['th']}}" class="colorWhite">{{$item['title']['th']}}</a></li>
            @endforeach
          </ul>
        </div>

        <div class="col-md-3 col-sm-6 col-12">
          <!--Column4-->
          <h4 class="footer__middle_title">
            <a href="{{ URL::to('doctor') }}" class="colorWhite">{{ __('default.footer_header_doctors') }}</a>
          </h4>
          <ul class="footet__list__item list-unstyled d-none d-sm-block">
            @foreach ($doctor as $item)
              <li><a href="{{$item['slug']['th']}}" class="colorWhite">{{$item['title']['th']}}</a></li>
            @endforeach
          </ul>
        </div>
        <!--Column5-->
        <div class="col-md-3 col-sm-6 col-12">
          <h4 class="footer__middle_title">
            <a href="{{ URL::to('home#googlemap') }}" class="colorWhite">{{ __('default.footer_header_contactus') }}</a>
          </h4>
          <ul class="footet__list__item list-unstyled">
            <!--li><a href="#" class="colorWhite">{{-- __('default.footer_header_contactus_contact') --}}</a></li>
            <li><a href="#" class="colorWhite">{{-- __('default.footer_header_contactus_meeting') --}}</a></li>
            <li><a href="#" class="colorWhite">{{-- __('default.footer_header_contactus_map') --}}</a></li-->
            <li>
              <a href="{{ __('default.nav_phone_number_href')}}" class="colorWhite">
                <img src="{{ asset('images/ico_phone_white.svg') }}" class="footer_ico" />
                {{ __('default.footer_header_contactus_phone') }}
              </a>
            </li>
            <li>
              <a href="{{ __('default.href_mail') }}" class="colorWhite">
                <img src="{{ asset('images/ico_mail_white.svg') }}" class="footer_ico" />
                {{ __('default.footer_header_contactus_mail') }}
              </a>
            </li>
            <li>
              <a href="http://line.me/ti/p/@joyofminds" target="_blank" class="colorWhite">
                <img src="{{ asset('images/ico_line_white.svg') }}" class="footer_ico" />
                {{ __('default.footer_header_contactus_line') }}
              </a>
            </li>
            <li>
              <a href="https://www.facebook.com/Joyofminds" target="_blank" class="colorWhite">
                <img src="{{ asset('images/ico_facebook_white.svg') }}" class="footer_ico" />
                {{ __('default.footer_header_contactus_name') }}
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center colorGray line__1height">
        <div class="footer__company__name">
          <strong>{{ __('default.footer_company_name') }}</strong>
        </div>
        <p class="footer__copyright">{!! trans('default.footer_copyright') !!}</p>
      </div>
    </div>
  </div>
</footer>

<style>
  #btn-line {
    display: inline-block;
    width: 60px;
    height: 60px;
    text-align: center;
    border-radius: 4px;
    position: fixed;
    bottom: 110px;
    right: 35px;
    transition: background-color .3s, 
      opacity .5s, visibility .5s;
    /* opacity: 0;
    visibility: hidden; */
    z-index: 99999;
  }
/* Styles for the content section */

/* .content {
  width: 77%;
  margin: 50px auto;
  font-family: 'Merriweather', serif;
  font-size: 17px;
  color: #6c767a;
  line-height: 1.9;
}
@media (min-width: 500px) {
  .content {
    width: 43%;
  }
  #button {
    margin: 30px;
  }
}
.content h1 {
  margin-bottom: -10px;
  color: #03a9f4;
  line-height: 1.5;
}
.content h3 {
  font-style: italic;
  color: #96a2a7;
} */
</style>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v9.0'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


// var btnLineApps = $('#btn-line');

// $(window).scroll(function() {
//   if ($(window).scrollTop() > 300) {
//     btnLineApps.addClass('show');
//   } else {
//     btnLineApps.removeClass('show');
//   }
// });

// btnLineApps.on('click', function(e) {
//   e.preventDefault();
//   $('html, body').animate({scrollTop:0}, '300');
// });


</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="114214706998927"
  theme_color="#5dc9c9"
  logged_in_greeting="Joy of minds สวัสดีค่ะ หากท่านมีข้อสงสัยใดสามารถสอบถามได้ ทางเราจะรีบตอบกลับโดยเร็วที่สุดค่ะ"
  logged_out_greeting="Joy of minds ขอบคุณสำหรับการติดต่อค่ะ">
</div>