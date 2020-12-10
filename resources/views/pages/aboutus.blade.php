@extends('layouts.default')

@section('content')

<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<style>
/* external css: flickity.css */
.about__us {
  padding: 25px 0;
  margin-bottom: 50px;
  background-color: #5dc9c9;
  color: white;
}
.aboutus__main h1, .aboutus__main p {
  margin: 0;
}
.dashStyle {
  list-style-type: none;
  padding-left: 2.5rem;
}
.dashStyle li:before {
  content: "–";
  position: absolute;
  margin-left: -1em;
}
.section__gallery {
  background-color: #ECECEC;
  margin: 25px 0;
  padding: 80px 0;
}
.flickity-viewport {
  height: 460px;
}
.gallery-cell {
  width: 60%;
  height: 420px;
  margin-right: 10px;
  margin-top: 20px;
  margin-bottom: 20px;
  background: #000;
  counter-increment: gallery-cell;
  text-align: center;
}
.gallery-cell.is-selected {
  height: 460px;
  margin-top: 0px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: contain;
}
.img-gallery {
  object-fit: cover;
}
/* cell number */
/*.gallery-cell:before {
  display: block;
  text-align: center;
  content: counter(gallery-cell);
  line-height: 300px;
  font-size: 80px;
  color: white;
}*/
</style>

@include('includes.banner')

<section class="about__us" id="vision_mission">
  <div class="container">
    <div class="row">
      <div class="col-12 aboutus__main">
          <h1 class="fontSize2rem">{{ __('aboutus.aboutus_title') }}</h1>
          <p class="fontSize15rem">{{ __('aboutus.aboutus_detail') }}</p>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <div class="row">
    <div class="col-12 aboutus__pvm">
      <h2 class="colorPrimary fontSize2rem">{{ __('aboutus.pvm_title') }}</h2>
      <h3>{{ __('aboutus.philosophy_title') }}</h3>
      <p class="fontSize15rem">{{ __('aboutus.philosophy_detail') }}</p>
      <br />
      <h3>{{ __('aboutus.vision_title') }}</h3>
      <p class="fontSize15rem">{{ __('aboutus.vision_detail') }}</p>
      <br />
      <h3>{{ __('aboutus.mission_title') }}</h3>
      <p>
        <ul class="dashStyle">
            <li class="fontSize15rem">{{ __('aboutus.mission_title_1') }}</li>
            <li class="fontSize15rem">{{ __('aboutus.mission_title_2') }}</li>
            <li class="fontSize15rem">{{ __('aboutus.mission_title_3') }}</li>
        </ul>
      </p>
    </div>
  </div>
</div>
<section id="gallery" class="section__gallery">
  <div class="container">
      <div class="row">
          <div class="col-12 aboutus__gallery">
              <h2 class="colorPrimary fontSize2rem text-center">{{ __('aboutus.gallery_title') }}</h2>
              <br />
              <!-- Desktop Version. -->
              <div class="gallery js-flickity d-none d-sm-block" data-flickity-options='{ "wrapAround": true }'>
                @foreach ($gallery as $item)
                    <div class="gallery-cell">
                      <a data-fancybox="gallery" href="{{$item['image']}}">
                        <img src="{{$item['image']}}" width="100%" class="img-gallery" />
                      </a>
                    </div>
                @endforeach
              </div>
              <!-- Mobile Version. -->
              <div class="owl-carousel owl-theme d-block d-sm-none">
                @foreach ($gallery as $item)
                    <div class="item"><img src="{{$item['image']}}" width="100%" class="img-gallery" /></div>
                @endforeach
              </div>
          </div>
      </div>
    <div>
  </div>
</section>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script>
  jQuery(document).ready(function() {
    $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      responsive:{
          0:{
              items:1
          },
          768:{
              items:3
          },
          1200:{
              items:5
          }
      }
    });
  });
</script>
@stop