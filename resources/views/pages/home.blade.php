@extends('layouts.default')

@section('content')

<div class="hero_banner">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="/images/banner/banner_home_01.jpg?version=231" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="/images/banner/banner_home_01.jpg?version=320" alt="Second slide">
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
              <div class="col-sm-4 col-12 home__info colorWhite section_info_1">
                <img src="{{ asset('images/ico_stethoscope_white.svg') }}" class="icoInfo" />
                <h3>{!! __('home.info_estimate') !!}</h3>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quis quibusdam saepe provident dignissimos ex pariatur. Excepturi fugit distinctio assumenda aut illum iure placeat? Sed praesentium sit repellendus quibusdam quasi.</div>
              </div>   
              <div class="col-sm-4 col-12 home__info colorWhite section_info_2">
                <img src="{{ asset('images/ico_brain_white.svg') }}" class="icoInfo" />
                <h3>{!! __('home.info_cure') !!}</h3>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda eaque veritatis reprehenderit beatae quas sed? Ipsam provident excepturi atque ipsa debitis quam maxime, ex cupiditate veritatis et, magnam rem eos!</div>
              </div>   
              <div class="col-sm-4 col-12 home__info colorWhite section_info_1">
                <img src="{{ asset('images/ico_heart_white.svg') }}" class="icoInfo" />
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
          <h2 class="colorPrimary">{{ __('home.info_doctor') }}</h2>
          <p class="fontSize125rem">{{ __('home.info_doctor_detail') }}</p>
        </div>
        <div class="col-12 text-center">
          <hr class="section__doctor__hr" >
        </div>
      </div>
    </div>
</section>

<section class="section__article">
  <div class="container">
      <div class="row">
        <div class="col-8 offset-2 text-center">
          <h2 class="colorPrimary">{{ __('home.info_article') }}</h2>
          <p class="fontSize125rem">{{ __('home.info_article_detail') }}</p>
        </div>
        <div class="col-12 text-center">
          <hr class="section__doctor__hr" >
        </div>
      </div>
    </div>
</section>

<section class="section__vdo">
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