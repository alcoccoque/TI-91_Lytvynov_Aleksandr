@extends('layouts.master')

@section('title')
    Панель администратора - Место
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

    <div class="row">
        <div class="container">
            <div class="container">
                <h4 class="center-align">Добавить место</h4>
                <div class="row"></div>
                <form action="{{route('post.create.place')}}" method="post">
                    <div class="input-field col s12">
                        <input type="text" name="name" id="name" class="validate">
                        <label for="name">Имя</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="information" class="materialize-textarea" name="information"></textarea>
                        <label for="information">Информация</label>
                    </div>
                    <div class="input-field col s12">
                        <select name="city_id">
                            <option value="" disabled selected>Выбрать опцию</option>
                            @foreach ($cities as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
                        </select>
                        <label>Выбрать город</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="text" name="image" id="image" class="validate">
                        <label for="image">URL картинки</label>
                    </div>
                    <div class="input-field col s12">
                        <button type="submit" class="waves-effect waves-light btn col s12">Добавить место</button>
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection