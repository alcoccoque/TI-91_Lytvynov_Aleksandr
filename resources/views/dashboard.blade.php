@extends('layouts.master')

@section('title')
    Доска
@endsection

@section('content')
    <div class="row">
        <div class="col s7">
            <form action="{{ route('post.post') }}" method="post">
                <div class="input-field s12">
                    <textarea name="body" id="textarea1" class="materialize-textarea"></textarea>
                    <label for="textarea1">Расскажите о ваших поездках</label>
                </div>
                <button type="submit" class="btn waves-effect waves-light">Пост</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
            <div class="row">
                <div class="col s12">
                    <h5 class="center-align">Понравившиеся города</h5>
                    <div class="row"></div>
                    @if ($count == 0)
                        <p class="center-align red">Вам пока не понравился ни один город</p>
                        <a href="{{route('cities')}}" class="btn waves-effect waves-light col s12">Исследовать</a>
                    @else
                        <ul class="collection z-depth-3">
                            @foreach ($cities as $city)
                                <li class="collection-item">
                                    <a href="{{route('show.city', $city->id)}}"><h5 class="center-align">{{$city->name}}</h5></a>
                                    <div class="row">
                                        <img src="{{$city->image}}" alt="" class="col s12">
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
            <div class="row">
                <h5 class="center-align">Последние комментарии</h5>
                @if(count($comments) == 0)
                  <p class="center-align red"><i>У вас нет комментариев</i></p>
                @else
                  <ul class="collection z-depth-3">
                    @foreach($comments as $comment)
                      <li class="collection-item grey lighten-4 z-depth-3">
                        <h5 class="center-align">{{$comment->title}}</h5>
                        <p class="center-align">Commenting for {{$comment->city->name}}</p>
                        <p class="center-align">{{$comment->body}}</p>
                      </li>
                    @endforeach
                  </ul>
                @endif
            </div>
            <div class="row">
                <h5 class="center-align">Вашы посты</h5>
                @if(count($articles) == 0)
                    <p class="center-align red">Вы еще не сохранили ни одного поста</p>
                @else
                    <ul class="collection z-depth-3">
                        @foreach($articles as $article)
                            <li class="collection-item grey lighten-4 z-depth-3">
                                <h5 class="center-align">{{$article->title}}</h5>
                                <p>{{$article->description}}</p>
                                <small><a href="{{$article->url}}" target="_blank">Прочитать весь пост</a></small>
                                <small><a href="{{route('article.delete', $article->id)}}" class="right">Удалить</a></small>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>

        </div>
        <div class="col s5">
            <p class="center-align">Последние посты пользователей</p>
            @foreach($posts as $post)
                <div class="card grey lighten-4 z-depth-3">
                    <div class="card-content">
                        <span class=" black-text card-title"> <i class="material-icons prefix">account_circle</i> {{ $post->user->email }}</span>
                        <div class="divider"></div>
                        <p class="black-text"> {{ $post->body }}</p>
                        <small class="black-text">{{date('j M, Y H:i', strtotime($post->created_at))}}</strong></small>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
