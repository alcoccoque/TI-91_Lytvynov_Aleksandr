@extends('layouts.master')

@section('title')
    Панель администратора - Город
@endsection

@section('content')
    <div class="row"></div>
    <nav class="center-align">
        <div class="nav-wrapper grey darken-1">
            <ul class="center">
                <li><a href="{{route('admin')}}">Отзывы</a></li>
                <li><a href="{{route('admin.createc')}}">Добавить город</a></li>
                <li><a href="{{route('admin.createp')}}">Добавить место</a></li>
                <li><a href="{{route('admin.users')}}">Пользователи</a></li>
            </ul>
        </div>
    </nav>

    <div class="row"></div>
    <div class="container">
        <div class="container">
            <h4 class="center-align">Добавить город</h4>
            <div class="row"></div>
            <form action="{{route('post.create.city')}}" method="post">
                <div class="input-field col s12">
                    <input type="text" name="name" id="name" class="validate">
                    <label for="name">Имя</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="image" id="image" class="validate">
                    <label for="image">URL картинки</label>
                </div>
                <div class="input-field col s12">
                    <textarea id="description" class="materialize-textarea" name="description"></textarea>
                    <label for="description">Описание</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="lat" id="lat" class="validate">
                    <label for="lat">Широта</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="lng" id="lng" class="validate">
                    <label for="lng">Долгота</label>
                </div>
                <button type="submit" class=" center-align waves-effect waves-light btn">Добавить город</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
    <div class="row"></div>
@endsection