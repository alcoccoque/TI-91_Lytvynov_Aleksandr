@extends('layouts.master')

@section('title')
    cities
@endsection

@section('content')
    <div class="row"></div>
    <div class="row">
        <div class="col s12">
            <nav>
                <div class="nav-wrapper green accent-4">
                    <ul class="left">
                        <li><a href="{!! route('cities.name', 'Киев') !!}">Киев</a></li>
                        <li><a href="{!! route('cities.name', 'Харьков') !!}">Харьков</a></li>
                        <li><a href="{!! route('cities.name', 'Львов') !!}">Львов</a></li>
                        <li><a href="{!! route('cities.name', 'Одесса') !!}">Одесса</a></li>
                        <li>||</li>
                        <li><a href="{!! route('cities.popularity') !!}">Сортировать по популярности</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    @foreach ($cities as $city)
    <div class="row">
        <div class="col s12">
            <div class="card z-depth-3 grey lighten-4">
                <div class="card-content">
                    <img src="{{ $city->image }}" alt="" class="col s3">
                    <h4>{{ $city->name }}</h4>
                    <p>{{ $cityy->description }}</p>
                </div>
                <div class="card-action center-align">
                    <a class="waves-effect waves-light btn green accent-4" href="{!! route('show.city', $city->id) !!}">Исследуй {{ $city->name }}</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{ $cities->links() }}
@endsection
