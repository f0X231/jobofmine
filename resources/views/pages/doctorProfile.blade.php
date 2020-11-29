@extends('layouts.default')

@section('content')

<style>
    .objectFitcover {
        object-fit: cover;
    }
    .doctor__main {
        margin: 80px 0 50px 0;
    }
    .line {
        background-color: #5dc9c9;
        height: 2px;
    }
    .doctor__education {
        padding-left: 25px;
        font-size: 1.5rem;
    }
    .doctor__work{
        background-color: #5dc9c9;
        color: white;
        padding: 25px 0;
    }
    .doctor__work__detail {
        padding-left: 25px;
        font-size: 1.5rem;
    }
    .doctor__extension {   
        font-size: 1.5rem
    }
    .doctor__extension h2 {
        color: #5dc9c9;
        margin-top: 50px;
        font-size: 2rem;
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
        <div class="col-sm-5 col-12 doctor__main">
            <img src="{{$data['picture']}}" class="objectFitcover" height="460" width="100%" />
        </div>
        <div class="col-sm-7 col-12 doctor__main">
            <h1 class="fontSize3rem colorPrimary">{{$data['name']['th']}}</h1>
            @if(!empty($data['nickname']))
                <h2 class="colorPrimary">( {{$data['nickname']}} )</h2>
            @endif
            @if(!empty($data['license']))
                <label>{{ __('doctor.license') }} : {{$data['license']}}</label>
            @endif
            <hr class="w-100 line">
            <h2 class="colorPrimary">&middot; {{ __('doctor.education') }}</h2>
            <div class="doctor__education">{!! urldecode($data['education']['th']) !!}</div>
        </div>
    </div>
</div>
<div class="doctor__work">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>&middot; {{ __('doctor.work') }}</h2>
                <div class="doctor__work__detail">{!! urldecode($data['work']['th']) !!}</div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 doctor__extension">{!! urldecode($data['extended']['th']) !!}</div>
    </div>
</div>

@stop