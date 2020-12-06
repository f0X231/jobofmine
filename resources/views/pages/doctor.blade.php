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

@include('includes.banner')

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