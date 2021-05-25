@extends('layout')

@section('title')
   Home - @parent
@endsection

@section('content')
    <x-blocks.jumbotron
        jumbotron-title="Welcome!"
        jumbotron-paragraph="This is our news site where you can find a lot of interesting information about different topics"
    />
@endsection
