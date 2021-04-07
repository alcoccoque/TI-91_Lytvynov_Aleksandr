@extends('layouts.master')

@section('title')
    Добро пожаловать
@endsection

@section('header')
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0>
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
</head>
@endsection

@section('content')


   
<div id="hero-slider">
      <div id="info">
         <div class="card-wrapper">
            <a href="{{route('home')}}" class="brand-logo"></a>
            <p>Любимые места</p>
            <article class="card card--1">
               <div class="card__info-hover">
                  <div class="card__clock-info">
                     <svg class="card__clock"  viewBox="0 0 24 24">
                        <path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                     </svg>
                     <span class="card__time">10 km</span>
                  </div>
               </div>
               <div class="card__img"></div>
               <a href="#" class="card_link">
                  <div class="card__img--hover"></div>
               </a>
               <div class="card__info">
                  <span class="card__category"> Киево-Печерская лавра</span>
                  <h3 class="card__title">Ул. Лаврская 15</h3>
               </div>
            </article>
            <article class="card card--2">
               <div class="card__info-hover">
                  <div class="card__clock-info">
                     <svg class="card__clock"  viewBox="0 0 24 24">
                        <path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                     </svg>
                     <span class="card__time">10 km</span>
                  </div>
               </div>
               <div class="card__img"></div>
               <a href="#" class="card_link">
                  <div class="card__img--hover"></div>
               </a>
               <div class="card__info">
                  <span class="card__category"> Киево-Печерская лавра</span>
                  <h3 class="card__title">Ул. Лаврская 15</h3>
               </div>
            </article>
            <article class="card card--3">
               <div class="card__info-hover">
                  <div class="card__clock-info">
                     <svg class="card__clock"  viewBox="0 0 24 24">
                        <path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                     </svg>
                     <span class="card__time">10 km</span>
                  </div>
               </div>
               <div class="card__img"></div>
               <a href="#" class="card_link">
                  <div class="card__img--hover"></div>
               </a>
               <div class="card__info">
                  <span class="card__category"> Киево-Печерская лавра</span>
                  <h3 class="card__title">Ул. Лаврская 15</h3>
               </div>
            </article>
        </div>
      </div>
	<div id="slideshow">

<header class="headerMenu" id="headerMenu">         
      <ul class="menu">
            <li><a href="{{route('cities')}}" >Туры</a></li>
            @if (Auth::guest())
              <li><a href="{{route('login')}}">Войти</a></li>
              <li><a href="{{route('signup')}}">Регистрация</a></li>
            @endif
            @if (!Auth::guest())
              <li><a href="{{route('news.index')}}" class="blue accent-3">Новости</a></li>
              <li><a href="{{route('dashboard')}}">Привет {{ Auth::user()->username }}</a></li>
              <li><a href="{{route('logout')}}">Выйти</a></li>
              @if (auth()->user()->isAdmin())
                <li><a href="{{route('admin')}}" class="grey darken-1">Панель админа</a></li>
              @endif
            @endif
      </ul>
</header>

	<div id="slides-main" class="slides">
            <div class="slide" data-index="0">
               <div class="abs-mask">
                  <div class="slide-image" style="background-image: url(./img/slide-1.jpg)"></div>
               </div>
            </div>
            <div class="slide" data-index="1">
               <div class="abs-mask">
                  <div class="slide-image" style="background-image: url(./img/slide-2.jpg)"></div>
               </div>
            </div>
            <div class="slide" data-index="2">
               <div class="abs-mask">
                  <div class="slide-image" style="background-image: url(./img/slide-3.jpg)"></div>
               </div>
            </div>
            <div class="slide" data-index="3">
               <div class="abs-mask">
                  <div class="slide-image" style="background-image: url(./img/slide-4.jpg)"></div>
               </div>
            </div>
         </div>
         <div id="slides-aux" class="slides mask">
            <h2 class="slide-title slide" data-index="0">
               <a href="#">КИЕВ</a>
            </h2>
            <h2 class="slide-title slide" data-index="1"><a href="#">ОДЕССА</a></h2>
            <h2 class="slide-title slide" data-index="2"><a href="#">ХАРЬКОВ</a></h2>
            <h2 class="slide-title slide" data-index="3"><a href="#">ЛЬВОВ</a></h2>
         </div>
    </div>
    <nav id="slider-nav">
       <span class="current">01</span>
       <span class="sep"></span>
       <span class="total">04</span>
    </nav>
</div>
   <!--  <footer>
         <input type="checkbox" name="" id="side-menu-switch">
         <div class="side-menu">
            <label for="side-menu-switch">
            <i class="fa fa-chevron-left"></i>
            </label>  
            <div class="circle">
               <ul class="social-icons">
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-phone"></i></a></li>
               </ul>
            </div>
         </div>
      </footer> -->
            <!-- 
<div class="row">
  <h4 class="center-align">Check out our latest entries for places to visit</h4>
  <div class="divider"></div>
</div>
<div class="row">
  @foreach($places as $place)
    <div class="card medium z-depth-3 col s4 grey lighten-4">
      <div class="card-content">
        <img src="{{$place->image}}" alt="smt" class="col s12">
        <h5 class="center-align">{{$place->name}}</h5>
        <h5 class="center-align">Exlore the place in {{$place->city->name}} page</h5>
        <a href="{{route('show.city', $place->city->id)}}" class="waves-effect waves-light btn col s12">Go to {{$place->city->name}}</a>
      </div>
    </div>
  @endforeach
</div>

<div class="row">
  <h4 class="center-align">Люди и страны</h4>
  <div class="divider"></div>
</div>
<div class="row">
  <div class="col s6">
    <h5 class="center-align">Что люди говорят про свои путешествия</h5>
    <ul class="collection z-depth-3">
      @foreach($posts as $post)
        <li class="collection-item teal lighten-2 z-depth-3">
          <h5 class="center-align">{{$post->user->username}} said on {{date('j M, Y H:i', strtotime($post->created_at))}}</h5>
          <p class="center-align">{{$post->body}}</p>
        </li>
      @endforeach
    </ul>
  </div>
  <div class="col s6">
    <h4 class="center-align">Популярные страны</h4>
    @foreach($cities as $city)
      <div class="card small z-depth-3 col s6 grey lighten-4">
        <img src="{{$city->image}}" alt="smt" class="col s12">
        <h5 class="center-align">{{$city->name}}</h5>
        <p class="center-align">Популяция: {{$city->population}}</p>
        <p class="center-align">Континент: {{$city->continent}}</p>
      </div>
    @endforeach
  </div>
</div>

<div class="row">
  <h4 class="center-align">Больше новостей</h4>
  <div class="divider"></div>
</div>

<div class="row">
  <div class="card medium z-depth-3 col s4 grey lighten-4 class">
    <div class="card-content">
      <img src="{{$news->articles[4]->urlToImage}}" alt="smt" class="col s12">
      <a href="{{$news->articles[4]->url}}" target="_blank"><h5 class="center-align">{{$news->articles[4]->title}}</h5></a>
      <p>{{$news->articles[4]->description}}</p>
    </div>
  </div>
  <div class="card medium z-depth-3 col s4 grey lighten-4 class">
    <div class="card-content">
      <img src="{{$news->articles[5]->urlToImage}}" alt="smt" class="col s12">
      <a href="{{$news->articles[5]->url}}" target="_blank"><h5 class="center-align">{{$news->articles[5]->title}}</h5></a>
      <p>{{$news->articles[5]->description}}</p>
    </div>
  </div>
  <div class="card medium z-depth-3 col s4 grey lighten-4 class">
    <div class="card-content">
      <img src="{{$news->articles[6]->urlToImage}}" alt="smt" class="col s12">
      <a href="{{$news->articles[6]->url}}" target="_blank"><h5 class="center-align">{{$news->articles[6]->title}}</h5></a>
      <p>{{$news->articles[6]->description}}</p>
    </div>

  </div>
</div>
 -->

@endsection