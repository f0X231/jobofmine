@extends('layouts.default')

@section('content')

<style>
.doctor__work{
    background-color: #5dc9c9;
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

<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-6 col-12 doctor__main">
            <img src="{{$data['picture']}}" width="100%" />
        </div>
        <div class="col-md-8 col-sm-6 col-12 doctor__main">
            <h1>{{$data['name']['th']}}</h1>
            <p>{{$data['license']['th']}}</p>
            <h2>{{ __('doctor.education') }}</h2>
            <p>{{$data['education']}}</p>
        </div>
    </div>
</div>
<div class="doctor__work">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>{{ __('doctor.work') }}</h2>
                <p>{{$data['work']}}</p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>{{ __('doctor.work') }}</h2>
            <p>{{$data['research']}}</p>
        </div>
    </div>
</div>

@stop