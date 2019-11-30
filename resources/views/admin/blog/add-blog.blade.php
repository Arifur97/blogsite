@extends('admin.master')

@section('body')
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Blog</div>
            <div class="card-body">
                <form action="{{ route('new-blog') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" name="title" class="form-control" placeholder="Title">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" name="des" class="form-control" placeholder="Des">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="file" name="image" class="form-control" placeholder="Image">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" name="status" class="form-control" placeholder="Des">
                        </div>
                    </div>
                    <button type="submit">Save</button>
                </form>
            </div>
        </div>
        </div>
    @endsection
