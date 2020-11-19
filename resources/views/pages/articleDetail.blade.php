@extends('layouts.default')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 doctor__main">
            <h1>{{$data['title']['th']}}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">{{$data['detail']['th']}}</div>
    </div>
</div>

@stop