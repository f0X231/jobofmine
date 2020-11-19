@extends('layouts.default')

@section('content')

<div class="hero_banner">
</div>
<div class="container">
    <div class="row">
        <div class="col-12 doctor__main">
            <h1>{{ __('service.service_title') }}</h1>
            <p>{{ __('service.service_detail') }}</p>
        </div>
    </div>

    <div class="row">
        @foreach ($data as $item)
            <div class="col-sm-6 col-12">
                <a href="{{$item['slug']['th']}}">{{$item['title']['th']}}</a>
            </div>
        @endforeach
    </div>
</div>

@stop