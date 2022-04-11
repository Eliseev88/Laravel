@extends('layout')

@section('title') Admin/Order №{{ $order->id }} @parent @stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <x-admin.sidebar />
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">AdminPanel</h1>
                </div>
                <h3 class="text-white">Order №{{ $order->id }} comment:</h3>
               <p class="lead text-white">{{ $order->comment }}</p>
            </main>
        </div>
    </div>
@endsection
