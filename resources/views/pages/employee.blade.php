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
    padding: 25px 8px;
    height: 150px;
    overflow: hidden;
  }
  .list-article {
    font-size: 1.5em;
  }
</style>

@include('includes.banner')

<div class="container">
    <div class="row">
        <div class="col-12 services__main">
            <h1 class="colorPrimary fontSize3rem">{{ __('employee.employee_title') }}</h1>
            <h2 class="fontSize3rem">{{ __('employee.employee_title_sub') }}</h2>
            <p class="fontSize15rem">{{ __('employee.employee_detail01') }}</p>
            <p class="fontSize15rem">{{ __('employee.employee_detail02') }}</p>
            <p class="fontSize15rem">{{ __('employee.employee_detail03') }}</p>
            <p class="fontSize15rem">{{ __('employee.employee_detail04') }}</p>
            <p class="fontSize15rem">{{ __('employee.employee_detail05') }}</p>
            <br />
            <h2 class="fontSize3rem">{{ __('employee.employee_option_title') }}</h2>
            <p class="fontSize15rem">{!! __('employee.employee_option01') !!}</p>
            <ol class="list-article">
              <li>{{ __('employee.employee_article01') }}</li>
              <li>{{ __('employee.employee_article02') }}</li>
              <li>{{ __('employee.employee_article03') }}</li>
            </ol>
            <p class="fontSize15rem">{!! __('employee.employee_option01') !!}</p>
            <p class="fontSize15rem">{!! __('employee.employee_option02') !!}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-12 text-center"><h2 class="colorPrimary">{{ __('employee.employee_title02') }}</h2></div>
        <div class="col-sm-12 col-12"><br /></div>
        @foreach ($data as $key => $item)
            <div class="col-sm-4 col-12">
                <a href="{{$item['slug']['th']}}">
                  <div class="services__item">
                    <img src="{{$item['thumbnail']['th']}}" width="100%" class="services__thumbnail" />
                    <h3 class="colorPrimary fontSize2rem services__item__title">{{$item['title']['th']}}</h3>
                  </div>
                </a>
            </div>
            @if(($key + 1) % 3 == 0)
                <div class="col-sm-12 col-12"><br /></div>
            @endif
        @endforeach
    </div>
</div>

@stop