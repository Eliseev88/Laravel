@extends('layout')

@section('title')
   Home - @parent
@endsection

@section('content')
    <x-blocks.jumbotron
        jumbotron-title="Welcome!"
        jumbotron-paragraph="This is our news site where you can find a lot of interesting information about different topics"
    />
    <div class="container-fluid text-dark col-md-12 d-flex justify-content-around mb-md-4 flex-wrap">
        @forelse($allNews as $news)
            <div class="card mb-3" style="width: 18rem;">
                <img src="https://via.placeholder.com/100x50" class="card-img-top" alt="news_{{ $news->id }}">
                <div class="card-body">
                    <p>{{ $news->category->category_name }}</p>
                    <h5 class="card-title">{{ $news->title }}</h5>
                    <p class="card-text">{{ \Illuminate\Support\Str::substr($news->content, 0, 50) }}...</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('news.news', ['name' => $news->category->category_name, 'id' => $news->id]) }}" class="btn btn-primary">Show news</a>
                        <small>{{ $news->created_at }}</small>
                    </div>
                </div>
            </div>
        @empty
            <h2>No news</h2>
        @endforelse
        <div class="d-flex justify-content-center">{{ $allNews->links() }}</div>
    </div>
@endsection
