@extends('layouts.default')

@section('content')

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"  />
<style>
/* external css: flickity.css */
.about__us {
  background-color: #5dc9c9;
  color: white;
}
.gallery {
  background: #EEE;
}
.gallery-cell {
  width: 66%;
  height: 200px;
  margin-right: 10px;
  background: #8C8;
  counter-increment: gallery-cell;
}
/* cell number */
.gallery-cell:before {
  display: block;
  text-align: center;
  content: counter(gallery-cell);
  line-height: 200px;
  font-size: 80px;
  color: white;
}
</style>

<div class="hero_banner">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="/images/banner/banner_home_01.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="/images/banner/banner_home_01.jpg" alt="Second slide">
      </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<section class="about__us">
  <div class="container">
    <div class="row">
      <div class="col-12 aboutus__main">
          <h1>{{ __('aboutus.aboutus_title') }}</h1>
          <p>{{ __('aboutus.aboutus_detail') }}</p>
      </div>
    </div>
  </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-12 aboutus__pvm">
            <h2 class="color__primary">{{ __('aboutus.pvm_title') }}</h2>
            <h3>{{ __('aboutus.philosophy_title') }}</h3>
            <p>{{ __('aboutus.philosophy_detail') }}</p>
            <h3>{{ __('aboutus.vision_title') }}</h3>
            <p>{{ __('aboutus.vision_detail') }}</p>
            <h3>{{ __('aboutus.mission_title') }}</h3>
            <p>
                <ul>
                    <li>{{ __('aboutus.mission_title_1') }}</li>
                    <li>{{ __('aboutus.mission_title_2') }}</li>
                    <li>{{ __('aboutus.mission_title_3') }}</li>
                </ul>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 aboutus__gallery">
            <h2 class="color__primary text-center">{{ __('aboutus.gallery_title') }}</h2>
            <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
              <div class="gallery-cell"></div>
              <div class="gallery-cell"></div>
              <div class="gallery-cell"></div>
              <div class="gallery-cell"></div>
              <div class="gallery-cell"></div>
            </div>
        </div>
    </div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.pkgd.min.js"></script>

@stop