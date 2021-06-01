@extends('layout')

@section('title') Add news - @parent @stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <x-admin.sidebar />
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">AdminPanel</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <a href="{{ route('admin.create_news') }}" class="btn btn-sm btn-outline-secondary">Add news</a>
                            <a href="{{ route('admin.create_order') }}" class="btn btn-sm btn-outline-secondary">Make order</a>
                        </div>
                    </div>
                </div>
                <h2 class="text-center">Add news</h2>
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif
                <form class="col-6" method="post" action="{{ route('admin.news_store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title *</label>
                        <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <label for="logo">Logo</label>
                        <input class="form-control" type="file" name="description" id="description">
                    </div>
                    <div class="form-group">
                        <label for="description">Description *</label>
                        <textarea rows="5"
                                  class="form-control"
                                  name="description"
                                  id="description"
                                  value="{!! old('description') !!}">
                        </textarea>
                    </div>
                    <br>
                    <button class="btn btn-success" type="submit">Add news</button>
                </form>
            </main>
        </div>
    </div>
@endsection
