@extends('layout')

@section('title')
    Category - @parent
@endsection


@section('content')
    <h1 class="text-center display-1">Choose category</h1>
    @foreach($category as $cat)
        <x-blocks.card url="{{ route('news.category_news', ['name' => $cat->category_name]) }}"
                       link-name="{{ $cat->category_name }}" />
    @endforeach
@endsection
