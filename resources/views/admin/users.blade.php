@extends('layouts.master')

@section('title')
    Панель администратора - Пользователи
@endsection

@section('content')
    <div class="row"></div>
    <nav class="center-align">
        <div class="nav-wrapper grey darken-1">
            <ul class="center">
                <li><a href="{{route('admin')}}">Отзывы</a></li>
                <li><a href="{{route('admin.createc')}}">Создать город</a></li>
                <li><a href="{{route('admin.createp')}}">Создать место</a></li>
                <li><a href="{{route('admin.users')}}">Пользователи</a></li>
            </ul>
        </div>
    </nav>

    <div class="row"></div>
    <h4 class="center-align">Список пользователей</h4>
    <ul class="collection">
        @foreach ($users as $user)
            @if ($user->type === 'admin')
                <li class="collection-item">
                    <p><strong>{{$user->email}}</strong></p>
                    <small>
                        <a href="{{route('admin.users.delete', $user->id)}}" class="waves-effect waves-light btn-small">Удалить</a>
                        <a href="{{route('admin.users.promote', $user->id)}}" class="waves-effect waves-light btn-small disabled">Повысить</a>
                        <a href="{{route('admin.users.demote', $user->id)}}" class="waves-effect waves-light btn-small">Понизить</a>
                    </small>
                </li>
            @else
                <li class="collection-item">
                    <p><strong>{{$user->email}}</strong></p>
                    <small>
                        <a href="{{route('admin.users.delete', $user->id)}}" class="waves-effect waves-light btn-small">Удалить</a>
                        <a href="{{route('admin.users.promote', $user->id)}}" class="waves-effect waves-light btn-small">Повысить</a>
                        <a href="{{route('admin.users.demote', $user->id)}}" class="waves-effect waves-light btn-small disabled">Понизить</a>
                    </small>
                </li>
            @endif
        @endforeach
    </ul>

    {{ $users->links() }}
@endsection