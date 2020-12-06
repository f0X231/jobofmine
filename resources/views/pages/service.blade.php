@extends('layouts.default')

@section('content')

<style>
  .services__main {
    margin: 50px 0;
  }
  .services__main h1, 
  .services__main p {
    margin-bottom: 0px;
  }
  .services__main p {
    text-indent: 50px;
  }
  .services__item {
    width: 100%;
    background: white;
    color: black;
    box-shadow: 0px 0px 0px grey;
    -webkit-transition:  box-shadow .6s ease-out;
    box-shadow: .8px .9px 3px grey;
  }
  .services__item:hover{
    color: black;
    box-shadow: 1px 8px 20px grey;
    -webkit-transition:  box-shadow .6s ease-in;
  }
  .services__item__title {
    padding: 25px 0;
  }
</style>

@include('includes.banner')

<div class="container">
    <div class="row">
        <div class="col-12 services__main">
            <h1 class="colorPrimary fontSize3rem">{{ __('service.service_title') }}</h1>
            <p class="fontSize15rem">{{ __('service.service_detail') }}</p>
        </div>
    </div>

    <div class="row">
        @foreach ($data as $item)
            <div class="col-sm-6 col-12">
                <a href="{{$item['slug']['th']}}">
                  <div class="services__item">
                    <img src="{{$item['thumbnail']['th']}}" width="100%" class="services__thumbnail" />
                    <h3 class="text-center colorPrimary fontSize2rem services__item__title">{{$item['title']['th']}}</h3>
                  </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

@stop