@extends('layouts.nmaster')

@section('title')
    {{ $city->name }}
@endsection

@section('head')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHMKDfy6PFdKpQLQv2209hfCD3w0jYvJM"></script>
    {{-- <script src = "https://maps.googleapis.com/maps/api/js?AIzaSyBHMKDfy6PFdKpQLQv2209hfCD3w0jYvJM"></script> --}}
    <script>
        function loadmap(){
            var mapOptions = {
                center:new google.maps.LatLng({{ $city->lat }}, {{ $city->lng }} ),
                zoom:6,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };

            var map = new google.maps.Map(document.getElementById("sample"),mapOptions);
        }

        google.maps.event.addDomListener(window, 'load', loadMap);
    </script>
@endsection

@section('content')
    <div class="row">
        <div class="parallax-container">
            <div class="parallax"><img src="{{ $city->image }}"></div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s7">
                <div class="card col s11 z-depth-3 teal lighten-4">
                    <div class="card-content">
                        <h3 class="center-align">
                            {{ $city->name }}
                        </h3>
                        @auth
                        @if($liked)
                            <a href="{{route('like.city', $city->id)}}" class="waves-effect waves-light btn disabled col s12 green accent-4">Уже поставили лайк</a>
                            <a href="{{route('unlike.city', $city->id)}}" class="waves-effect waves-light btn col s12 red">Отменить</a>
                        @else
                        <a href="{{route('like.city', $city->id)}}" class="waves-effect waves-light btn col s12 green accent-4">Лайк</a>
                        @endif
                        @endauth
                        <div class="row"></div>
                        <p>
                            {{ $city->description }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s5">
                <div class="card col s12 z-depth-3 teal lighten-4">
                    <div class="card-content"></div>
                        <div id = "sample"  style = "width:400px; height:350px;"><script>loadmap();</script></div>
                    </div>
                </div>
            </div>
        </div>

        @if (Auth::guest())
            <div class="row">
                <p class="center-align">
                    Пожалуйста <strong><a href="{{ route('login') }}">Войдите</a></strong> чтобы исследовать красивые места в {{ $city->name }}, оставляйте отзыв про свои путешествия, а так же читайте отзывы других
                </p>
            </div>
        @endif
    </div>

    @if (!Auth::guest())
        <div class="row">
            <h3 class="center-align">Интересные места для посещения в {{ $city->name }}</h3>
        </div>
        @foreach ($places as $place)
            <div class="row">
                <div class="parallax-container">
                    <div class="parallax"><img src="{{ $place->image }}"></div>
                </div>                
            </div>
            <div class="row">
                <div class="container">
                    <div class="card large col s12 z-depth-3 teal lighten-4">
                        <div class="card-content">
                            <h4 class="center-align">{{ $place->name }}</h4>
                            <p>{{ $place->information }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif

    @auth
        <div class="row">
            <h5 class="center-align">Напишите что-то про {{$city->name}}</h5>
            <form action="{{route('cities.post.comment', $cityy->id)}}" method="post">
                <div class="container">
                    <div class="input-field col s12">
                        <input id="title" type="text" class="validate" name="title">
                        <label for="title">Заголовок</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="body" class="materialize-textarea" name="body"></textarea>
                        <label for="body">Комментарий</label>
                    </div>
                    <div class="input-field col s12">
                        <button type="submit" class="waves-effect waves-light btn col s12">Комментировать</button>
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="container">
                <div class="container">
                    <ul class="collection">
                        @foreach($comments as $comment)
                            <li class="collection-item teal lighten-4">
                                <h5 class="center-align">{{$comment->title}}</h5>
                                <p class="center-align">Опубликован: <i>{{$comment->user->username}}</i></p>
                                <p class="center-align">{{$comment->body}}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endauth
@endsection