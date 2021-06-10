@extends('layout')

@section('title') Add category - @parent @stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <x-admin.sidebar />
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">AdminPanel</h1>
                </div>
                <h2 class="text-center">Add category</h2>
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif
                <form method="post" action="{{ route('categories.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="category_name">Category name *</label>
                        <input type="text" class="form-control" name="category_name" id="category_name" value="{{ old('category_name') }}">
                        @error('category_name') Incorrect value @enderror
                        @if($errors->has('category_name'))
                            <div class="alert alert-danger">
                                @foreach($errors->get('category_name') as $error)
                                    <p >{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <br>
                    <button class="btn btn-success" type="submit">Add category</button>
                </form>
            </main>
        </div>
    </div>
@endsection
