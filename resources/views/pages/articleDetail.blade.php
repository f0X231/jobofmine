@extends('layouts.default')

@section('content')

<style>
  .article__main {
      margin: 50px 0 10px 0;
  }
  .sortTxt {
      margin: 0 14px;
  }
  .lineFull {
      width: 100%;
      height: 1px;
      background-color: #C8C8C8;
      margin: 0;
  }
  .article__txt {
    padding: 8px 35px;
  }
</style>

<div class="container">
    <div class="row">
      <div class="col-12">
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
      </div>
    </div>

    <div class="row article__main">
      <div class="col-12">
          <h1 class="colorPrimary">{{$data['title']['th']}}</h1>
      </div>
      <div class="col-12">
          <hr class="lineFull" />
      </div>
    </div>

    <div class="row">
        <div class="col-12 article__txt fontSize15rem">{!! $data['detail']['th'] !!}</div>
        <div class="col-12 fontSize125rem">
          <br />
          <br />
          <p>{{ __('article.txt_credit') }} : {{$data['credit']}}</p>
          <p>{{ __('article.txt_footer') }}</p>
          <p>{{ __('article.txt_connect_txt') }} &middot; {!! __('article.txt_phone') !!} &middot; {!! __('article.txt_line') !!}</p>
        </div>
        <div class="col-12 fontSize125rem text-center">
          <br />
          <br />
          <a href="{{ URL::to('articles') }}">
            <b>
              <img src="{{ asset('images/back.svg') }}" class="icoNavbar" /> {{ __('article.txt_goback') }}
            </b>
          </a>
          <br />
        </div>
    </div>
</div>

@stop