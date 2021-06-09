@extends('layout')

@section('title') Admin/Categories - @parent @endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <x-admin.sidebar />
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">AdminPanel</h1>
                </div>
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Categories list:</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <a href="{{ route('categories.create') }}" class="btn btn-sm btn-outline-secondary">Add category</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered text-white">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Category_name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td>
                                    <a href="{{ route('categories.edit', ['category' => $category]) }}">Edit</a>&nbsp;||&nbsp;
                                    <a href="javascript:;" class="delete" rel="{{ $category->id }}">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4"><h3>No categories</h3></td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
@endsection
@push('js')
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            const el = document.querySelectorAll(".delete");
            console.log(el);
            el.forEach(function(e, k) {
                e.addEventListener("click", function() {
                    const rel = e.getAttribute("rel");
                    if(confirm("Are you sure delete category with #ID " + rel + " ?")) {
                        submit("/admin/categories/" + rel).then(() => {
                            location.reload();
                        })
                    }
                });
            })
        });
        async function submit(url) {
            let response = await fetch(url, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            });
            let result = await response.json();
            return result.ok;
        }
    </script>
@endpush
