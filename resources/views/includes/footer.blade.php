<footer class="mainfooter">
  <div class="footer__middle">
    <div class="container">
      <div class="row">
        <div class="col-md-1 col-sm-4 col-6">
          <!--Column1-->
          <h4 class="footer__middle_title">
            <a href="{{ URL::to('home') }}" class="colorWhite">{{ __('default.footer_header_home') }}</a>
          </h4>
        </div>

        <div class="col-md-2 col-sm-4 col-6">
          <!--Column2-->
          <h4 class="footer__middle_title">
            <a href="{{ URL::to('aboutus') }}" class="colorWhite">{{ __('default.footer_header_aboutus') }}</a>
          </h4>
          <ul class="footet__list__item list-unstyled d-none d-sm-block">
            <li><a href="{{ URL::to('aboutus') }}" class="colorWhite">{{ __('default.footer_header_aboutus_name') }}</a></li>
            <li><a href="{{ URL::to('aboutus') }}" class="colorWhite">{{ __('default.footer_header_aboutus_vision') }}</a></li>
            <li><a href="{{ URL::to('aboutus') }}" class="colorWhite">{{ __('default.footer_header_aboutus_mission') }}</a></li>
            <li><a href="{{ URL::to('aboutus') }}" class="colorWhite">{{ __('default.footer_header_aboutus_gallery') }}</a></li>
          </ul>
        </div>

        <div class="col-md-3 col-sm-4 col-6">
          <!--Column3-->
          <h4 class="footer__middle_title">
            <a href="{{ URL::to('services') }}" class="colorWhite">{{ __('default.footer_header_service') }}</a>
          </h4>
          <ul class="footet__list__item list-unstyled d-none d-sm-block">
            <li><a href="#" class="colorWhite">โรคจิตที่เกิดจากสารต่างๆ และยา</a></li>
            <li><a href="#" class="colorWhite">จิตเวชเด็กและวัยรุ่น</a></li>
          </ul>
        </div>

        <div class="col-md-3 col-sm-6 col-6">
          <!--Column4-->
          <h4 class="footer__middle_title">
            <a href="{{ URL::to('doctor') }}" class="colorWhite">{{ __('default.footer_header_doctors') }}</a>
          </h4>
          <ul class="footet__list__item list-unstyled d-none d-sm-block">
            <li><a href="#" class="colorWhite">นพ.จตุภัทร คุณสงค์</a></li>
            <li><a href="#" class="colorWhite">นพ.ภูมิปภพ สุนศุข</a></li>
            <li><a href="#" class="colorWhite">พญ.ปรานี ปวีณชนา</a></li>
            <li><a href="#" class="colorWhite">นพ.ดร.ประวีณ์นุช เพ็ยกาสถานต์</a></li>
            <li><a href="#" class="colorWhite">นพ.จตุภัทร คุณสงค์</a></li>
            <li><a href="#" class="colorWhite">นพ.ภูมิปภพ สุนศุข</a></li>
            <li><a href="#" class="colorWhite">พญ.ปรานี ปวีณชนา</a></li>
            <li><a href="#" class="colorWhite">นพ.ดร.ประวีณ์นุช เพ็ยกาสถานต์</a></li>
          </ul>
        </div>
        <!--Column5-->
        <div class="col-md-3 col-sm-6 col-12">
          <h4 class="footer__middle_title">
            <a href="{{ URL::to('contactus') }}" class="colorWhite">{{ __('default.footer_header_contactus') }}</a>
          </h4>
          <ul class="footet__list__item list-unstyled">
            <li><a href="#" class="colorWhite">{{ __('default.footer_header_contactus_contact') }}</a></li>
            <li><a href="#" class="colorWhite">{{ __('default.footer_header_contactus_meeting') }}</a></li>
            <li><a href="#" class="colorWhite">{{ __('default.footer_header_contactus_map') }}</a></li>
            <li>
              <a href="{{ __('default.nav_phone_number_href')}}" class="colorWhite">
                <img src="{{ asset('images/ico_phone_white.svg') }}" class="footer_ico" />
                {{ __('default.footer_header_contactus_phone') }}
              </a>
            </li>
            <li>
              <a href="#" class="colorWhite">
                <img src="{{ asset('images/ico_mail_white.svg') }}" class="footer_ico" />
                {{ __('default.footer_header_contactus_mail') }}
              </a>
            </li>
            <li>
              <a href="#" class="colorWhite">
                <img src="{{ asset('images/ico_line_white.svg') }}" class="footer_ico" />
                {{ __('default.footer_header_contactus_line') }}
              </a>
            </li>
            <li>
              <a href="#" class="colorWhite">
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
