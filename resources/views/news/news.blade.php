@extends('layout')

@section('title')
    {{ $news->title }} - @parent
@endsection

@section('content')
   <h2>{{ $news->title }}</h2>
    <p>{{ $news->content }}</p>
@endsection
