@extends('layout')

@section('title') Yandex - @parent @stop

@section('content')
    <h3 class="text-center mt-5">{{ $yandex['title'] }}</h3>
    <h4 class="text-center mt-5 mb-5">{{ $yandex['description'] }}</h4>

    @foreach($yandex['news'] as $key => $val)
        <div class="card text-dark mb-2">
            <h5 class="card-header">News №{{ $key + 1 }}</h5>
            <div class="card-body">
                <h5 class="card-title">{{ $val['title'] }}</h5>
                <p class="card-text">{{ $val['description'] }}</p>
                <a href="{{ $val['link'] }}" target="_blank" class="btn btn-primary">Read more</a>
            </div>
        </div>
    @endforeach
@endsection
