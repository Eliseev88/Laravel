@extends('layout')

@section('title') Add order - @parent @stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <x-admin.sidebar />
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">AdminPanel</h1>
                </div>
                <h2 class="text-center">Make order</h2>
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif
                <form class="col-6" method="post" action="{{ route('orders.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}">
                        @error('name') Invalid value @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone *</label>
                        <input class="form-control" type="tel" name="phone" id="phone" value="{{ old('phone') }}">
                        @error('name') Invalid value @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail *</label>
                        <input class="form-control" type="email" name="email" id="email" value="{{ old('mail') }}">
                        @error('name') Invalid value @enderror
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment *</label>
                        <textarea rows="5"
                                  class="form-control"
                                  name="comment"
                                  id="comment"
                                  value="{{ old('comment') }}">
                        </textarea>
                        @error('name') Invalid value @enderror
                    </div>
                    <br>
                    <button class="btn btn-success" type="submit">Make order</button>
                </form>
            </main>
        </div>
    </div>
@endsection
