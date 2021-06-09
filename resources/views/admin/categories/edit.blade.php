@extends('layout')

@section('title') Edit category - @parent @stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <x-admin.sidebar />
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">AdminPanel</h1>
                </div>
                <h2 class="text-center">Edit category</h2>
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif
                <form method="post" action="{{ route('categories.update', ['category' => $category]) }}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="category_name">Category name *</label>
                        <input type="text" class="form-control" name="category_name" id="category_name" value="{{ $category->category_name }}">
                    </div>
                    <br>
                    <button class="btn btn-success" type="submit">Edit category</button>
                </form>
            </main>
        </div>
    </div>
@endsection
