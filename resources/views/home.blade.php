@extends('layouts.app')

@section('title', 'Home')
@section('page_css')
    <link rel="stylesheet" href="css/home.css">
@endsection

@section('content')
    <main>
        <div class="overlay d-flex flex-wrap justify-content-center align-items-center">
            <h1>
                Welcome to Not a scam agency
            </h1>
            <a class="btn btn-primary" href="{{ route('flights') }}" role="button">Check our offers!</a>
        </div>

    </main>
@endsection
