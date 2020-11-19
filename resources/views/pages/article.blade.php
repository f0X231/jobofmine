@extends('layouts.default')

@section('content')

<div class="container">
    <div class="row article__main">
        <div class="col-sm-6 col-12">
            <h1>{{ __('article.title') }}</h1>
        </div>
        <div class="col-sm-6 col-12">
            <label>{{ __('article.orderby') }}</label>
            <select>
                <option value="orderby_1v">{{ __('article.orderby_1') }}</option>
            </select>
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