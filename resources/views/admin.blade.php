@extends('layouts.master')

@section('title')
    Admin Panel
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

    <h4 class="center-align">Отзывы</h4>
    <h5 class="center-align">Средняя оценка: {{$score}}</h5>

    <ul class="collection">
        @foreach($feedbacks as $feedback)
            <li class="collection-item">
                <h5>{{ $feedback->title }}</h5>
                <p>{{$feedback->body}}</p>
                <p>Рейтинг: {{$feedback->rating}}</p>
                <small>Создан: {{$feedback->user->username}}</small>
                <br>
                <small>Время создания: {{$feedback->created_at}}</small>
            </li>
        @endforeach
    </ul>
    {{ $feedbacks->links() }}


@endsection