@extends('layouts.default')

@section('content')


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

<div class="container">
    <div class="row">
        <div class="col-12 doctor__main">
            <h1>{{ __('doctor.title') }}</h1>
            <p>{{ __('doctor.detail') }}</p>
        </div>
    </div>

    <div class="row">
        @foreach ($data as $item)
            <div class="col-md-4 col-sm-6 col-12">
                <a href="{{$item['slug']['th']}}">
                    <div><img src="{{$item['thumbnail']}}" width="100%" /></div>
                    <p>{{$item['title']['th']}}</p>
                </a>
            </div>
        @endforeach
    </div>
</div>

@stop