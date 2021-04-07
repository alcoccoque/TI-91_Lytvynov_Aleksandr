@extends('layouts.master')

@section('title')
    SРегистрация
@endsection

@section('content')
<div class="center-block">
    <a href="{{route('home')}}" class="brand-logo"></a>
    <form action="{{ route('post.signup') }}" method="post">
        <div class="card-login">
                <div class="input-field col s12">
                    <input type="text" class="validate" name="email" id="email">
                    <label for="email">Почта</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" class="validate" name="username" id="username">
                    <label for="username">Имя пользователя </label>
                    </div>
                <div class="input-field col s12">
                    <input type="password" class="validate" name="password" id="password">
                    <label for="password">Пароль</label>
                </div>
                <div class="col s12">
                    <button class="butt" type="submit" name="action">Регистрация
                    </button>
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                </div>
                <div class="already-acc">
                    <p>Уже есть аккаунт?</p>
                    <a href="{{ route('login') }}" class="buttt">Войти</a>
                </div>
        </div>
    </form>
</div>
@endsection