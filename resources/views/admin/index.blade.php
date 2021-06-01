@extends('layout')

@section('title') Admin - @parent @endsection

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
            </main>
        </div>
    </div>
@endsection
