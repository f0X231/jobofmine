@extends('layouts.default')

@section('content')

<style>
  .services__main {
    margin: 50px 0;
  }
  .services__main h1, 
  .services__main p {
    margin-bottom: 0px;
  }
  .services__main p {
    text-indent: 50px;
  }
  .services__item {
    width: 100%;
    background: white;
    color: black;
    box-shadow: 0px 0px 0px grey;
    -webkit-transition:  box-shadow .6s ease-out;
    box-shadow: .8px .9px 3px grey;
  }
  .services__item:hover{
    color: black;
    box-shadow: 1px 8px 20px grey;
    -webkit-transition:  box-shadow .6s ease-in;
  }
  .services__item__title {
    padding: 25px 8px;
    height: 150px;
    overflow: hidden;
  }
  .list-article {
    font-size: 1.5em;
  }
</style>

@include('includes.banner')

<div class="container">
    <div class="row">
        <div class="col-12">
            <br />
            <h2 class="fontSize2rem">{!! __('service.pain_head01') !!}</h2>
            <p class="fontSize15rem">{!! __('service.pain_txt01') !!}</p>
            <br />
            <h2 class="fontSize2rem">{!! __('service.pain_head02') !!}</h2>
            <p class="fontSize15rem">{!! __('service.pain_txt02') !!}</p>
            <br />
            <h2 class="fontSize2rem">{!! __('service.pain_head03') !!}</h2>
            <br />
            <h2 class="fontSize2rem">{!! __('service.pain_head02_c01') !!}</h2>
            <p class="fontSize15rem">{!! __('service.pain_head02_d01') !!}</p>
            <br />
            <h2 class="fontSize2rem">{!! __('service.pain_head02_c02') !!}</h2>
            <p class="fontSize15rem">{!! __('service.pain_head02_d02') !!}</p>
            <br />
            <h2 class="fontSize2rem">{!! __('service.pain_head02_c03') !!}</h2>
            <p class="fontSize15rem">{!! __('service.pain_head02_d03') !!}</p>
            <br />
            <h2 class="fontSize2rem">{!! __('service.pain_head02_c04') !!}</h2>
            <p class="fontSize15rem">{!! __('service.pain_head02_d04') !!}</p>
            <br />
            <h2 class="fontSize2rem">{!! __('service.pain_head02_c05') !!}</h2>
            <p class="fontSize15rem">{!! __('service.pain_head02_d05') !!}</p>
            <br />
            <h2 class="fontSize2rem">{!! __('service.pain_head04') !!}</h2>
            <p class="fontSize15rem">{!! __('service.pain_txt04') !!}</p>
            <br />
            <h2 class="fontSize2rem">{!! __('service.pain_head05') !!}</h2>
            <p class="fontSize15rem">{!! __('service.pain_txt05') !!}</p>
            <br />
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-12 col-md-5">
            <img src="{{ asset('/images/doctor_pain-management.jpg') }}" width="100%" />
        </div>
        <div class="col-12 col-md-7">
            <h1 class="colorPrimary fontSize3rem">{!! __('service.pain_doc_name') !!}</h1>
            <br />

            <h2 class="fontSize2rem">{!! __('service.pain_doc_h01') !!}</h2>
            <p class="fontSize15rem">{!! __('service.pain_doc_txt01') !!}</p>
            <br />
            <h2 class="fontSize2rem">{!! __('service.pain_doc_h03') !!}</h2>
            <p class="fontSize15rem">{!! __('service.pain_doc_txt02') !!}</p>
            <br />
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <br />
            <h2 class="fontSize2rem">{!! __('service.pain_doc_h03') !!}</h2>
            <p class="fontSize15rem">{!! __('service.pain_doc_txt03') !!}</p>
            <br />
            <h2 class="fontSize2rem">{!! __('service.pain_doc_h04') !!}</h2>
            <p class="fontSize15rem">{!! __('service.pain_doc_txt04') !!}</p>
            <br />
        </div>
    </div>

</div>

@stop