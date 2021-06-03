@extends('layout')

@section('title')
    Category News - @parent
@endsection

@section('content')
    <h1 class="text-center display-1">{{ $categoryName }}</h1>
    @foreach($categoryNews as $el)
        <x-blocks.card url="{{ route('news.news', ['name' => $el->category_name, 'id' => $el->id]) }}" link-name="{{ $el->title }}" />
    @endforeach
@endsection
