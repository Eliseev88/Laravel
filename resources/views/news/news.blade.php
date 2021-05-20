@extends('layout')

@section('title')
    News №{{ $newsId }}
@endsection

@section('nav2')
    active
@endsection

@section('content')
    This is the news №{{ $newsId }} of category {{ $categoryName }}
@endsection
