@extends('admin.master')
@section('body')
    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Other Blog Table</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>User</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>SL NO</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>

                            @php($i = 1)
                            @foreach($blogs as $blog)

                                <tbody>
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $blog->name }}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ $blog->des }}</td>
                                    <td><img src="{{ asset($blog->image) }}" alt="" height="80" width="100"/></td>
                                    <td>{{ $blog->status }}</td>
                                    <td>
                                        <a href="{{ route('edit-blog', ['id' => $blog->id]) }}" class="text-white btn btn-success">Edit</a>|
                                        |<a href="{{ route('delete-blog', ['id' => $blog->id]) }}" id="" class="text-white delete-btn btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                </tbody>

                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
