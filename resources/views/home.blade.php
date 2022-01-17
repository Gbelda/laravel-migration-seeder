@extends('layouts.app')

@section('title', 'Home')
@section('page_css')
    <link rel="stylesheet" href="css/home.css">
@endsection

@section('content')
    <main>
        <div class="overlay d-flex flex-wrap justify-content-center align-items-center">
            <h1>
                Welcome to Tiny Agency
            </h1>
            <p>We are a travel agency for your travel needs!</p>
            <a class="btn btn-primary" href="{{ route('flights') }}" role="button">Check our offers!</a>
        </div>

    </main>
@endsection
