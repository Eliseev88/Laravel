@extends('layout')

@section('title')
@endsection

@section('nav2')
    active
@endsection

@section('content')
    <h3 style="margin-bottom: 50px;">{{ $categoryName }}</h3>
    @foreach($categoryNews as $key => $element)

        <p><a href="{{ route('news.news', ['name' => $categoryName, 'id' => ++$key]) }}">{{ $element }}</a></p>
    @endforeach
@endsection
