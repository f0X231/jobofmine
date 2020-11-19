@extends('layouts.default')

@section('content')

<div class="hero_banner">
</div>
<div class="container">
    <div class="row">
        <div class="col-12 doctor__main">
            <h1>{{$data['title']['th']}}</h1>
            <p>{{$data['description']['th']}}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-12">Detail : {{$data['detail']['th']}}</div>
        <div class="col-sm-6 col-12">Picture</div>
    </div>
</div>

@stop