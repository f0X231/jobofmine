@extends('layouts.default')

@section('content')

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
                <a href="{{$item['slug']['th']}}">{{$item['title']['th']}}</a>
            </div>
        @endforeach
    </div>
</div>

@stop