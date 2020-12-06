@extends('layouts.default')

@section('content')

<style>
  .services__main {
    margin: 50px 0 25px 0;
  }
  .services__header h1, .services__header p {
    margin-bottom: 0px;
  }
  .services__detail h3 {
    color: #5dc9c9;
    font-size: 2rem;
  }
  .services__detail ul {
    list-style-type: none;
    padding-left: 2rem;
  }
  .services__detail ul li:before {
    content: "–";
    position: absolute;
    margin-left: -1em;
  }
  .services__gallery {
    margin-bottom: 8px;
  }
</style>

@include('includes.banner')

<div class="container">
    <!-- Content -->
    <div class="row">
        <div class="col-12 services__main">
            <h1 class="colorPrimary fontSize3rem">{{$data['title']['th']}}</h1>
            <p class="fontSize15rem">{{$data['description']['th']}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-12 services__detail fontSize125rem">
          {!!$data['detail']['th']!!}
          <br />
            <div class="fontSize125rem">
              <a href="{{ URL::to('services') }}">
                <b>
                  <img src="{{ asset('images/back.svg') }}" class="icoNavbar" /> {{ __('service.txt_goback') }}
                </b>
              </a>
            </div>
            <br />
        </div>
        <div class="col-sm-6 col-12">
            @foreach ($gallery as $items)
              <div class="services__gallery">
                  <img src="{{$items['image']}}" width="100%" alt="" />
              </div>
            @endforeach
        </div>
    </div>

</div>

@stop