@extends('layouts.default')

@section('content')

<div class="container">
    <!-- Hero Banner -->
    <div class="row hero__banner">
        <div class="col-12">
            <div class='slider'>
                <input checked id='slide-1' name='active' type='radio'>
                <div class='slide' data-content='1'></div>
                <nav class='nav'>
                    <label class='prev' for='slide-4'></label>
                    <label class='next' for='slide-2'></label>
                </nav>
                <nav class='dots'>
                    <label class='dot' for='slide-1'></label>
                    <label class='dot' for='slide-2'></label>
                    <label class='dot' for='slide-3'></label>
                    <label class='dot' for='slide-4'></label>
                </nav>
                
                <input id='slide-2' name='active' type='radio'>
                <div class='slide' data-content='2'></div>
                <nav class='nav'>
                    <label class='prev' for='slide-1'></label>
                    <label class='next' for='slide-3'></label>
                </nav>
                <nav class='dots'>
                    <label class='dot' for='slide-1'></label>
                    <label class='dot' for='slide-2'></label>
                    <label class='dot' for='slide-3'></label>
                    <label class='dot' for='slide-4'></label>
                </nav>

                <input id='slide-3' name='active' type='radio'>
                <div class='slide' data-content='3'></div>
                <nav class='nav'>
                    <label class='prev' for='slide-2'></label>
                    <label class='next' for='slide-4'></label>
                </nav>
                <nav class='dots'>
                    <label class='dot' for='slide-1'></label>
                    <label class='dot' for='slide-2'></label>
                    <label class='dot' for='slide-3'></label>
                    <label class='dot' for='slide-4'></label>
                </nav>

                <input id='slide-4' name='active' type='radio'>
                <div class='slide' data-content='4'></div>
                <nav class='nav'>
                    <label class='prev' for='slide-3'></label>
                    <label class='next' for='slide-1'></label>
                </nav>
                <nav class='dots'>
                    <label class='dot' for='slide-1'></label>
                    <label class='dot' for='slide-2'></label>
                    <label class='dot' for='slide-3'></label>
                    <label class='dot' for='slide-4'></label>
                </nav>
            </div>
        </div>
    </div>


    <!-- Flickity HTML init -->
    <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
        <div class="gallery-cell"></div>
        <div class="gallery-cell"></div>
        <div class="gallery-cell"></div>
        <div class="gallery-cell"></div>
        <div class="gallery-cell"></div>
    </div>

    <!-- Content -->
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
<script src="/js/flickity.pkgd.js"></script>

@stop