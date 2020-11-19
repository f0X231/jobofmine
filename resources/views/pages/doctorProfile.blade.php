@extends('layouts.default')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 doctor__main">
            <h1>{{$data['name']['th']}}</h1>
            <p>{{$data['license']['th']}}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">{{ __('doctor.education') }}</div>
        <div class="col-12">education</div>
        <div class="col-12">{{ __('doctor.work') }}</div>
        <div class="col-12">work</div>
        <div class="col-12">{{ __('doctor.research') }}</div>
        <div class="col-12">research</div>
    </div>
</div>

@stop