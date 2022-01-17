@extends('layouts.app')


@section('content')
    <main>
        <div class="container mt-5">
            <div class="card " style="">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ $blog->image }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $blog->title }}</h5>
                            <p class="card-text">{{ $blog->content }}</p>
                            <p class="card-text"><small class="text-muted">Date posted:
                                    {{ $blog->post_date }}</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
