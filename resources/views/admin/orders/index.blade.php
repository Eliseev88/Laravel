@extends('layout')

@section('title') Admin/Orders @parent @stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <x-admin.sidebar />
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">AdminPanel</h1>
                </div>
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Order list:</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <a href="{{ route('orders.create') }}" class="btn btn-sm btn-outline-secondary">Add order</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered text-white">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($orders as $order)
                            <tr>
                                <td><a href="{{ route('orders.show', ['order' => $order->id]) }}">{{ $order->id }}</a></td>
                                <td>{{ $order->name }}</td>
                                <td>{{ $order->phone }}</td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->created_at->format('d-m-Y H:i') }}</td>
                                <td>{{ $order->updated_at->format('d-m-Y H:i') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4"><h3>No orders</h3></td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    <div>{{ $orders->links() }}</div>
                </div>
            </main>
        </div>
    </div>
@endsection
