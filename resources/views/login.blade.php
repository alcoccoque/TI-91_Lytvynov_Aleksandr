@extends('layouts.master')

@section('title')
    Войти
@endsection

@section('content')
<div class="center-block">
        <a href="{{route('home')}}" class="brand-logo"></a>
        <form action="{{ route('post.login') }}" method="post">
            <div class="card-login">
                    <div class="input-field">
                        <input type="text" class="validate" name="email" id="email">
                        <label for="email">Почта</label>
                    </div>
                    <div class="input-field">
                        <input type="password" class="validate" name="password" id="password">
                        <label for="password">Пароль</label>
                    </div>
                        <button class="butt" type="submit" name="action">Войти</button>
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                    </div>
                </div>
        </form>
</div>
    
@endsection