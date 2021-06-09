@extends('layout')

@section('title') Add news - @parent @stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <x-admin.sidebar />
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">AdminPanel</h1>
                </div>
                <h2 class="text-center">Add news</h2>
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif
                <form class="col-6" method="post" action="{{ route('news.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="category_id">Category *</label>
                        <select class="form-control" name="category_id" id="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                        @if(old('category_id') == $category->id) selected @endif>{{ $category->category_name }}
                                </option>
                            @endforeach
                        </select>
                        @if($errors->has('category_id'))
                            <div class="alert alert-danger">
                                @foreach($errors->get('category_id') as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="title">Title *</label>
                        <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <label for="logo">Logo</label>
                        <input class="form-control" type="file" name="image" id="image">
                    </div>
                    <div class="form-group">
                        <label for="description">Content *</label>
                        <textarea rows="5"
                                  class="form-control"
                                  name="content"
                                  id="content"
                                  value="{{ old('content') }}">
                        </textarea>
                    </div>
                    <br>
                    <button class="btn btn-success" type="submit">Add news</button>
                </form>
            </main>
        </div>
    </div>
@endsection
