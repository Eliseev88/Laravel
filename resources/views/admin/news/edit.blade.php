@extends('layout')

@section('title') Edit news - @parent @stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <x-admin.sidebar />
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">AdminPanel</h1>
                </div>
                <h2 class="text-center">Edit news</h2>
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif
                <form method="post" action="{{ route('news.update', ['news' => $news]) }}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="category_id">Category *</label>
                        <select class="form-control" name="category_id" id="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                        @if($category->id === $news->category_id) selected @endif>{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Title *</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ $news->title }}">
                    </div>

                    <div class="form-group">
                        <label for="image">Logo</label>
                        <input type="file" class="form-control" name="image" id="image">
                    </div>
                    <div class="form-group">
                        <label for="description">Content *</label>
                        <textarea class="form-control" name="content" id="content">{!! $news->content !!}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="status">Статус</label>
                        <select class="form-control" name="status" id="status">
                            <option>draft</option>
                            <option>published</option>
                            <option>blocked</option>
                        </select>
                    </div>
                    <br>
                    <button class="btn btn-success" type="submit">Edit news</button>
                </form>
            </main>
        </div>
    </div>
@endsection
