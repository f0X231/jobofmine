@extends('layouts.default')

@section('content')

<style>
  .services__main {
    margin: 50px 0 25px 0;
    font-size: 1.5rem;
  }
  .services__header h1, .services__header p {
    margin-bottom: 0px;
  }
  .services__detail h3 {
    font-size: 1.5rem;
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
  .services__main p {
    margin-bottom: 0px;
  }
</style>

@include('includes.banner')

<div class="container">
    <!-- Content -->
    <div class="row">
        <div class="col-12 services__main">
            <h1 class="colorPrimary fontSize3rem">{{$data['title']['th']}}</h1>
            <p class="fontSize15rem">{!! $data['description']['th'] !!}</p>
        </div>
    </div>

    @if(isset($data['detail']['th']))
        <div class="row">
            <div class="col-sm-12 col-12 services__detail fontSize125rem">
            {!!$data['detail']['th']!!}
            <br />
                <div class="fontSize125rem">
                <a href="{{ URL::to('employee-program') }}">
                    <b>
                    <img src="{{ asset('images/back.svg') }}" class="icoNavbar" /> {{ __('employee.txt_goback') }}
                    </b>
                </a>
                </div>
                <br />
            </div>
        </div>
    @endif
</div>

@stop