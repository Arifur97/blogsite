@extends('front.master')

@section('body')
    <div class="row">
{{--        @foreach($blogDetails as $blog)--}}
            <div class="col-md-8 mb-8">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="card-img-top">
                            <img src="{{ asset($blog->image) }}" alt="1" style="height: 120px;width: 100px">
                        </div>
                        <h2 class="card-title">{{ $blog->title }}</h2>
                        <p class="card-text">{{ $blog->des }}</p>
                    </div>
                </div>
            </div>
{{--        @endforeach--}}


    </div>
@endsection
