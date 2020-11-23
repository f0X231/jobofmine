@extends('layouts.default')

@section('content')

<style>
.section__info {
  margin: -80px;
}
.section__info__txt {
  background-color: #008080;
  height: 350px;
}
.home__info {
  padding: 50px 15px;
}
.section__doctor {
  margin-top: 150px;
}
video {
  width: 100%;
  max-height: 100%;
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

<section class="section__info">
  <div class="container">
      <div class="row">
          <div class="col-10 offset-1 section__info__txt">
            <div class="row">
              <div class="col-sm-4 col-12 home__info color__white">
                <h3>{!! __('home.info_estimate') !!}</h3>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quis quibusdam saepe provident dignissimos ex pariatur. Excepturi fugit distinctio assumenda aut illum iure placeat? Sed praesentium sit repellendus quibusdam quasi.</div>
              </div>   
              <div class="col-sm-4 col-12 home__info color__white">
                <h3>{!! __('home.info_cure') !!}</h3>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda eaque veritatis reprehenderit beatae quas sed? Ipsam provident excepturi atque ipsa debitis quam maxime, ex cupiditate veritatis et, magnam rem eos!</div>
              </div>   
              <div class="col-sm-4 col-12 home__info color__white">
                <h3>{!! __('home.info_heal') !!}</h3>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, nihil vel, itaque suscipit nulla nemo soluta dignissimos dolorem repellat nisi natus sequi facilis deserunt culpa excepturi eum, aliquid dolore. Quibusdam.</div>
              </div>  
            </div>
          </div>
      </div>    
  </div>
</section>

<section class="section__doctor">
  <div class="container">
      <div class="row">
        <div class="col-8 offset-2 text-center">
          <h2>{{ __('home.info_doctor') }}</h2>
          <p>{{ __('home.info_doctor_detail') }}</p>
        </div>
      </div>
    </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-10 offset-1" id="player-overlay">
        <video>
          <source src="/images/video/sample.mp4" />
          <source src="/images/video/sample.webm" type='video/webm; codecs="vp8, vorbis"' />
          <source src="/images/video/sample.ogv" type='video/ogg; codecs="theora, vorbis"' />
        </video>
      </div>
  </div>
</section>

<section class="section__doctor">
  <div class="container">
      <div class="row">
        <div class="col-8 offset-2 text-center">
          <h2>{{ __('home.info_article') }}</h2>
          <p>{{ __('home.info_article_detail') }}</p>
        </div>
      </div>
    </div>
</section>

<div class="row">
  @foreach ($article as $item)
      <div class="col-sm-6 col-12">
          <a href="{{$item['slug']['th']}}">{{$item['title']['th']}}</a>
      </div>
  @endforeach
</div>

@stop