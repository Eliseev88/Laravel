@extends('layout')

@section('title')
    News №{{ $newsId }} - @parent
@endsection

@section('content')
    This is the news №{{ $newsId }} of category {{ $categoryName }}
@endsection
