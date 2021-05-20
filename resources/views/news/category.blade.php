@extends('layout')

@section('title')
    Category
@endsection

@section('nav2')
    active
@endsection

@section('content')
    @foreach($category as $cat)
        <p><a href="{{ route('news.category_news', ['name' => $cat]) }}">{{ $cat }}</a></p>
    @endforeach
@endsection
