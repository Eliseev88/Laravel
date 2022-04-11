@extends('layout')

@section('title')
    Category News - @parent
@endsection

@section('content')
        <h1 class="text-center display-1">{{ $categoryName->category_name }}</h1>
        @foreach($categoryNews as $el)
            <x-blocks.card url="{{ route('news.news', ['name' => $categoryName->category_name, 'id' => $el->id]) }}" link-name="{{ $el->title }}" />
        @endforeach
@endsection
