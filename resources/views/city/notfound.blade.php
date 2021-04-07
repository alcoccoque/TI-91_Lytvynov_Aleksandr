@extends('layouts.master')

@section('title')
    404 Not Found
@endsection

@section('content')
    <div class="row">
        <h1 class="center-align">404</h1>
        <h3 class="center-align">Страница не найдена</h3>
    </div>
    <div class="row">
        <div class="col s12">
            <img src="https://www.bankerinthesun.com/wp-content/uploads/2014/11/Travel-Depressed-Backpacker.jpg" alt="">
            <h5 class="center-align">Из всех возможных мест ты выбрал именно это?</h5>
            <a href="{{route('home')}}" class="waves-effect waves-light btn col s12">Заберите меня ДОМОЙ</a>
        </div>
    </div>
@endsection