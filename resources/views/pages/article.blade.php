@extends('layouts.default')

@section('content')

<style>
.article__main {
    margin: 50px 0 80px 0;
}
.sortTxt {
    margin: 0 14px;
}
.lineFull {
    width: 100%;
    height: 1px;
    background-color: #C8C8C8;
    margin: 0;
}
.artical__item {
    width: 100%;
    background: white;
    color: black;
    box-shadow: 0px 0px 0px grey;
    -webkit-transition:  box-shadow .6s ease-out;
    box-shadow: .8px .9px 3px grey;
}
.artical__item:hover{
    color: black;
    box-shadow: 1px 8px 20px grey;
    -webkit-transition:  box-shadow .6s ease-in;
}
.artical__item p {
    font-size: 2rem;
    padding: 8px;
    min-height: 120px;
}
.page-link {
    font-size: 1.5em;
}

</style>
<div class="container">
    <div class="row article__main">
        <div class="col-sm-6 col-12">
            <h1 class="colorPrimary">{{ __('article.title') }}</h1>
        </div>
        <div class="col-sm-6 col-12 text-right">
            <label class="sortTxt fontSize15rem colorPrimary">{{ __('article.orderby') }}</label>
            <select>
                <option value="orderby_1v">{{ __('article.orderby_1') }}</option>
            </select>
        </div>
        <div class="col-12">
            <hr class="lineFull" />
        </div>
    </div>
    <div class="row">
        @foreach ($data as $item)
            <div class="col-sm-6 col-12">
                <a href="{{$item['slug']['th']}}">
                    <div class="artical__item">
                        <img src="{{$item['thumbnail']['th']}}" width="100%" />
                        <p>{{$item['title']['th']}}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    @if($pagelase > 1)
        <br />
        <div class="row">
            <div class="col-12 text-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="?page=1">First</a>
                    </li>
                    @if($page2prev > 0)
                        <li class="page-item"><a class="page-link" href="?page={{$page2prev}}">{{$page2prev}}</a></li>
                    @endif
                    @if($pageprev > 0)
                        <li class="page-item"><a class="page-link" href="?page={{$pageprev}}">{{$pageprev}}</a></li>
                    @endif
                    @if($pagecurrent > 0)
                        <li class="page-item"><a class="page-link" href="?page={{$pagecurrent}}">{{$pagecurrent}}</a></li>
                    @endif
                    @if($pagenext > 0)
                        <li class="page-item"><a class="page-link" href="?page={{$pagenext}}">{{$pagenext}}</a></li>
                    @endif
                    @if($page2next > 0)
                        <li class="page-item"><a class="page-link" href="?page={{$page2next}}">{{$page2next}}</a></li>
                    @endif
                    <li class="page-item">
                        <a class="page-link" href="?page={{$pagelase}}">Last</a>
                    </li>
                    </ul>
                </nav>
            </div>
        </div>
        <br />
    @endif
</div>

@stop