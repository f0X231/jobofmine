@extends('layouts.default')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 doctor__main">
            <h1>{{ __('doctor.doctor_title') }}</h1>
            <p>{{ __('doctor.doctor_detail') }}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 col-sm-6 col-12">A</div>
        <div class="col-md-4 col-sm-6 col-12">B</div>
        <div class="col-md-4 col-sm-6 col-12">C</div>
        <div class="col-md-4 col-sm-6 col-12">D</div>
        <div class="col-md-4 col-sm-6 col-12">E</div>
        <div class="col-md-4 col-sm-6 col-12">F</div>
        <div class="col-md-4 col-sm-6 col-12">G</div>
        <div class="col-md-4 col-sm-6 col-12">H</div>
    </div>
</div>

@stop