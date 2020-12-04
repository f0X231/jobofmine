@extends('layouts.default')

@section('content')

<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
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

<div class="hero_banner">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      @foreach ($banner as $item)
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{$item['image']['th']}}" alt="{{$item['description']}}">
        </div>
      @endforeach
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
              <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                @foreach ($gallery as $item)
                  <div class="gallery-cell" style="background-image: url('{{$item['image']}}')"></div>
                @endforeach
              </div>
          </div>
      </div>
    <div>
  </div>
</section>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

@stop