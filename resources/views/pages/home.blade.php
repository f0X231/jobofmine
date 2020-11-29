@extends('layouts.default')

@section('content')

<style>
@media (min-width: 768px) {
  /* show 3 items */
  .carousel-inner .active,
  .carousel-inner .active + .carousel-item,
  .carousel-inner .active + .carousel-item + .carousel-item {
    display: block;
  }

  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
    -webkit-transition: none;
    transition: none;
  }

  .carousel-inner .carousel-item-next,
  .carousel-inner .carousel-item-prev {
    position: relative;
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
  }

  .carousel-inner .active.carousel-item + .carousel-item + .carousel-item + .carousel-item {
    position: absolute;
    top: 0;
    right: -33.3333%;
    z-index: -1;
    display: block;
    visibility: visible;
  }

  /* left or forward direction */
  .active.carousel-item-left + .carousel-item-next.carousel-item-left,
  .carousel-item-next.carousel-item-left + .carousel-item,
  .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
  .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
    position: relative;
    -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
    visibility: visible;
  }

  /* farthest right hidden item must be abso position for animations */
  .carousel-inner .carousel-item-prev.carousel-item-right {
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    display: block;
    visibility: visible;
  }

  /* right or prev direction */
  .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
  .carousel-item-prev.carousel-item-right + .carousel-item,
  .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
  .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
    position: relative;
    -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
    visibility: visible;
    display: block;
    visibility: visible;
  }
}

.map-responsive{
    overflow:hidden;
    padding-bottom:50%;
    position:relative;
    height:0;
}
.map-responsive iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
}

  .home__contact__section {
    margin-top: -150px;
  }
  .home__contact__box {
    
    background-color: white;
    border: 1px solid #cccccc;
  }
  .home__services__section {
    margin: 50px 0;
  }
  .home__services__box a:hover {
    color: black;
  }
  .home__services__title {
    margin-top: 15px;
    margin-bottom: 0;
  }
  .home__services__txt {
    line-height: 1;
  }
</style>

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


      <div class="row">
        <div class="col-12">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner row w-100 mx-auto">
              <div class="carousel-item col-md-4 active">
                <div class="card">
                  <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f44242/fff" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Card 1</h4>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-4">
                <div class="card">
                  <img class="card-img-top img-fluid" src="http://placehold.it/800x600/418cf4/fff" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Card 2</h4>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-4">
                <div class="card">
                  <img class="card-img-top img-fluid" src="http://placehold.it/800x600/3ed846/fff" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Card 3</h4>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-4">
                <div class="card">
                  <img class="card-img-top img-fluid" src="http://placehold.it/800x600/42ebf4/fff" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Card 4</h4>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </div>
      </div>
    </div>
</section>

<!-- VDO -->
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

<!-- Article & Services -->
<section class="section__doctor">
  <div class="container">
      <div class="row">
        <div class="col-8 offset-2 text-center">
          <h2 class="colorPrimary">{{ __('home.info_article') }}</h2>
          <p class="fontSize15rem">{{ __('home.info_article_detail') }}</p>
        </div>
      </div>
      <div class="row text-center">
        <hr class="section__doctor__hr" >
      </div>
      <div class="row home__services__section">
        @foreach ($services as $item)
            <div class="col-sm-6 col-12 home__services__box">
                <a href="{{$item['slug']['th']}}">
                    <div class="home__services__item">
                      <img src="{{$item['thumbnail']['th']}}" width="100%" />
                      <h4 class="colorPrimary fontSize2rem home__services__title">{{$item['title']['th']}}</h4>
                      <p class="fontSize15rem home__services__txt">{{$item['description']['th']}}</p>
                    </div>
                </a>
            </div>
        @endforeach
      </div>
    </div>
</section>

<!-- Google Map & Contact Infomation -->
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" 
            width="600" 
            height="450" 
            frameborder="0" 
            style="border:0" 
            allowfullscreen></iframe>
      </div>
      <div class="row home__contact__section">
        <div class="col-10 offset-1">
          <div class="row">
            <div class="col-sm-4 col-12 text-center home__contact__box">
              <img src="{{ asset('images/ico_map_pin.svg') }}" class="icoInfo" />
              <h4>{{ __('home.contact_title_1') }}</h4>
              <p>{{ __('home.contact_address') }}</p>
              <br />
              <div>{{ __('home.contact_footer_1') }}</div>
              <br />
            </div>
            <div class="col-sm-4 col-12 text-center home__contact__box">
              <img src="{{ asset('images/ico_contact.svg') }}" class="icoInfo" />
              <h4>{{ __('home.contact_title_2') }}</h4>
              <p>{{ __('home.contact_contact_mail') }}</p>
              <p>{{ __('home.contact_contact_phone') }}</p>
              <br />
              <div>{{ __('home.contact_footer_2') }}</div>
              <br />
            </div>
            <div class="col-sm-4 col-12 text-center home__contact__box">
              <img src="{{ asset('images/ico_gallery.svg') }}" class="icoInfo" />
              <h4>{{ __('home.contact_title_3') }}</h4>
              <p>{{ __('home.contact_gallery_txt') }}</p>
              <br />
              <div>{{ __('home.contact_footer_3') }}</div>
              <br />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
// https://codepen.io/cy2/pen/MWYaRQj
$(document).ready(function() {
  $("#myCarousel").on("slide.bs.carousel", function(e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $(".carousel-item").length;

    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
          $(".carousel-item")
            .eq(i)
            .appendTo(".carousel-inner");
        } else {
          $(".carousel-item")
            .eq(0)
            .appendTo($(this).find(".carousel-inner"));
        }
      }
    }
  });
});
</script>

@stop