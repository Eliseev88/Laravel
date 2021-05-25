@extends('layout')

@section('title')
    Category News - @parent
@endsection

@section('content')
    <h1 class="text-center display-1">{{ $categoryName }}</h1>
    @foreach($categoryNews as $key => $element)
        <x-blocks.card url="{{ route('news.news', ['name' => $categoryName, 'id' => ++$key]) }}" link-name="{{ $element }}" />
    @endforeach
@endsection
