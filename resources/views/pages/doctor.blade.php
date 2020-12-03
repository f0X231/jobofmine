@extends('layouts.default')

@section('content')

<style>
  .doctor__main {
    margin: 50px 0;
  }
  .doctor__list a {
    color: #5dc9c9;
  }
  .doctor__name {
    margin: 8px 0 50px 0;
  }

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

<div class="container">
    <div class="row">
        <div class="col-12 doctor__main">
            <h1 class="colorPrimary fontSize3rem">{{ __('doctor.title') }}</h1>
            <p class="fontSize15rem">{{ __('doctor.detail') }}</p>
        </div>
    </div>

    <div class="row">
        @foreach ($doctor as $item)
            <div class="col-md-4 col-sm-6 col-12 doctor__list">
                <a href="{{$item['slug']['th']}}">
                    <div><img src="{{$item['thumbnail']}}" width="100%" /></div>
                    <p class="doctor__name text-center fontSize15rem colorPrimary">{{$item['title']['th']}}</p>
                </a>
            </div>
        @endforeach
    </div>
</div>

@stop