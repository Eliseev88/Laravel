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
                <h2 class="text-center">Make order</h2>
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif
                <form class="col-6" method="post" action="{{ route('admin.order_store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="title">Name *</label>
                        <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="logo">Phone *</label>
                        <input class="form-control" type="tel" name="phone" id="phone" value="{{ old('telephone') }}">
                    </div>
                    <div class="form-group">
                        <label for="logo">E-mail *</label>
                        <input class="form-control" type="email" name="mail" id="mail" value="{{ old('mail') }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Comment *</label>
                        <textarea rows="5"
                                  class="form-control"
                                  name="comment"
                                  id="comment"
                                  value="{!! old('comment') !!}">
                        </textarea>
                    </div>
                    <br>
                    <button class="btn btn-success" type="submit">Add news</button>
                </form>
            </main>
        </div>
    </div>
@endsection
