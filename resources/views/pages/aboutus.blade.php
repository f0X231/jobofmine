@extends('layouts.default')

@section('content')

<style>

.galeria {
  margin: 2vh auto 0;
  width: 80vw;
  transform-style: preserve-3d;
}
.galeria:before {
  content: '';
  padding-top: 56.25%;
  display: inline-block;
  width: 0;
}
.card {
  background-size: 2px 2px, cover;
  background-repeat: repeat, none;
  background-position: 0 0;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  box-shadow: 0 0 2rem rgba(0,0,0,.5);
  border-radius: 3px;
  font-family: 'Great Vibes';
}
.una {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAACCAYAAAEFsT2yAAAACXBIWXMAAAsSAAALEgHS3X78AAAAFElEQVR4nGNhYGBwYIET////ZwAAETIDym2lzEcAAAAASUVORK5CYII=), url(https://2.bp.blogspot.com/-Kd55Z83gyvM/UpD8A6qj6CI/AAAAAAAAH20/eV8YvYCDAvE/s1600/mult-lab1.jpg);
}
.dos {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAACCAYAAAEFsT2yAAAACXBIWXMAAAsSAAALEgHS3X78AAAAFElEQVR4nGNhYGBwYIET////ZwAAETIDym2lzEcAAAAASUVORK5CYII=), url(https://2.bp.blogspot.com/-ggbrdAifJsg/UpD8BKbE3qI/AAAAAAAAH24/qJ4tw_dWvZw/s1600/mult-lab2.jpg);
}
.tres {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAACCAYAAAEFsT2yAAAACXBIWXMAAAsSAAALEgHS3X78AAAAFElEQVR4nGNhYGBwYIET////ZwAAETIDym2lzEcAAAAASUVORK5CYII=), url(https://4.bp.blogspot.com/-OGSy0-ttar0/UpD8CJxQtjI/AAAAAAAAH3E/b2k5041nSAE/s1600/mult-lab3.jpg);
}
h2 {
  color: #fff;
  font-family: lato;
  text-align: center;
  font-size: 6vh;
  font-weight: 300;
  line-height: 8vh;
  background: #FF7361;
  box-shadow: 0 0 5px rgba(0,0,0,.7);
}
h2:before {
  position: absolute;
  left: 1rem;
  font-weight: 300;
  color: #00262F;
}
.card p {
  text-align: center;
  color: #fff;
  font-size: 5vw;
  line-height: 1.3;
  text-shadow: -1px -1px 0 #0D757D, 1px 1px 0 #000;
  margin-top: 3vh;
}
h3 {
  font-size: 5vw;
  font-weight: 700;
  margin: 1vh 0 1vh;
}
.footer {
  background: #15BFCC;
  color: #0D757D;
  position: absolute;
  bottom: 0;
  width: 100%;
  list-style-type: none;
  border-top: 3px solid rgba(255,255,255,.3);
}
#uno:checked ~ .una .footer,
#dole:checked ~ .dos .footer,
#tele:checked ~ .tres .footer {
  background: #0D757D;
  color: #15BFCC;
}
li {
  float: left;
  width: 33.33%;
  text-align: center;
}
li:before {  
  font-size: 4vh;
  line-height: 8vh;
}
input {visibility: hidden;}
label {
  background: #15BFCC;
  position: absolute;
  top: 0; bottom: 0;
  margin: auto 0;
  color: #fff;
  font-size: 4vw;
  line-height: 15vh; 
  text-align: right;
  height: 15vh;
  width: 4vw;
  padding: 0 .5vw;
  cursor: pointer;
  opacity: .2;
  transition: .5s linear;
}
.otra + .otra,
#uno:checked ~ .tres .afin,
#dole:checked ~ .una .afin,
#tele:checked ~ .dos .afin {
  right: 0;
  text-align: left;
}
#uno:checked ~ .una .otra,
#dole:checked ~ .dos .otra,
#tele:checked ~ .tres .otra {
  background:  #0D757D;
  display: block;
}
#uno:checked ~ .una .afin,
#dole:checked ~ .dos .afin,
#tele:checked ~ .tres .afin,
:not(:checked) ~ .otra
{display: none;}

.card:hover label {
  animation: pulso 1s infinite alternate;
}
.card:hover label + label {
  animation-delay: .5s;
}
.card:hover label:hover {
  animation: none;
  opacity: .8;
  width: 10vw;
  font-size: 10vw;
}

#uno:checked ~ .dos,
#dole:checked ~ .tres,
#tele:checked ~ .una {
  animation: 1s fuera-izq;
  animation-fill-mode: forwards;
  transform-origin: center left;
  z-index: 2;
}
#uno:checked ~ .tres,
#dole:checked ~ .una,
#tele:checked ~ .dos {
  animation: 1.5s fuera-dch;
  animation-fill-mode: forwards;
  transform-origin: center right;
  z-index: 2;
}
#uno:checked ~ .una,
#dole:checked ~ .dos,
#tele:checked ~ .tres {
  animation: 2s central;
  animation-fill-mode: forwards;
  transform-origin: center center;
  z-index:3;
}

@keyframes fuera-izq {
  0% {transform: scale(1) translatex(0%);} 
  70% {transform: scale(.9) translatex(-100%);}
  100% {transform: scale(.9) translatex(-7%);}
}
@keyframes fuera-dch {
  0% {transform: scale(1) translatex(0%);}
  70% {transform: scale(.9) translatex(100%);}
  100% {transform: scale(.9) translatex(7%);}
}
@keyframes central {
  0% {transform: scale(.8);z-index: 1;}
  80% {transform: scale(.5);z-index: 3;}
  100% {transform: scale(1);z-index: 3;}
}
@keyframes pulso {
  50% {opacity: .7;}
}

</style>

<div class="container">
    <div class="row">
        <div class="col-12 aboutus__main">
            <h1>{{ __('aboutus.aboutus_title') }}</h1>
            <p>{{ __('aboutus.aboutus_detail') }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 aboutus__pvm">
            <h2>{{ __('aboutus.pvm_title') }}</h2>
            <h3>{{ __('aboutus.philosophy_title') }}</h3>
            <p>{{ __('aboutus.philosophy_detail') }}</p>
            <h3>{{ __('aboutus.vision_title') }}</h3>
            <p>{{ __('aboutus.vision_detail') }}</p>
            <h3>{{ __('aboutus.mission_title') }}</h3>
            <p>
                <ul>
                    <li>{{ __('aboutus.mission_title_1') }}</li>
                    <li>{{ __('aboutus.mission_title_2') }}</li>
                    <li>{{ __('aboutus.mission_title_3') }}</li>
                </ul>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 aboutus__gallery">
            <h2>{{ __('aboutus.gallery_title') }}</h2>
            <div>


<div>
    <section class='galeria'>
      <input type="radio" id="uno" value="1" name="tractor" checked='checked' />    
    <input type="radio" id="dole" value="2" name="tractor" />      
    <input type="radio" id="tele" value="3" name="tractor" />
      <article class='card una'>
        <h2 class='entypo-tag'>Three Labels</h2>
          <p>Three Labels for each Input.<br/>
    One for go back,<br/>
    Another for go ahead,<br/>
    The Last for recover it.</p>
        <ul class='footer'>
          <li class='entypo-bell'></li>
          <li class='entypo-mic'></li>
          <li class='entypo-megaphone'></li>
        </ul>
        <label for='dole' class='entypo-left-bold otra'></label>
        <label for='tele' class='entypo-right-bold otra'></label>
        <label for='uno' class='entypo-arrows-ccw afin'></label>  
      </article>
      
      <article class='card dos'>
        <h2 class='entypo-feather'>One Input to rule them all</h2>
          <p>In the Land of the Good Taste<br/>
    where the Performers dwell.<br/>
    One Input to rule them all,<br/>
    One Input to find them.</p>
        <ul class='footer'>
          <li class='entypo-network'></li>
          <li class='entypo-qq'></li>
          <li class='entypo-picasa'></li>
        </ul>
        <label for='tele' class='entypo-left-bold otra'></label>
        <label for='uno' class='entypo-right-bold otra'></label>
        <label for='dole' class='entypo-arrows-ccw afin'></label>  
      </article>
      
      <article class='card tres'>
        <h2 class='entypo-address'>In the Land of Styles</h2>
          <p>One Input to bring them all<br/>
            and in the Html bind them<br/>
            In the Land of Styles<br/>
            where the Css is the King.</p>
        <ul class='footer'>
          <li class='entypo-ccw'></li>
          <li class='entypo-arrows-ccw'></li>
          <li class='entypo-cw'></li>
        </ul>
        <label for='uno' class='entypo-left-bold otra'></label>
        <label for='dole' class='entypo-right-bold otra'></label>
        <label for='tele' class='entypo-arrows-ccw afin'></label>  
      </article>
    </section>
    <h1><a href='https://ksesocss.blogspot.com/2013/11/slide-Css-multiples-labels.html'>Gallery pre/next pure Css. No links</a></h1>
    <p>Who said that every input must have only one label?</p>
    </div>

            </div>
        </div>
    </div>
</div>

@stop