@extends('layouts.app')
@section('content')
    <div class="title">
        <h1>
            Flights
        </h1>
    </div>

    <section>
        @foreach ($flights as $flight)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h4 class="card-title">
                        {{ $flight->destination }}
                    </h4>
                    <h5>
                        Airlines: {{ $flight->airline }}
                    </h5>
                    <h6>
                        Flight Duration: {{ $flight->flight_duration }}
                    </h6>
                    <div class="d-flex align-items-center justify-content-evenly">
                        <h5 class="m-0">
                            {{ $flight->price }}&euro;
                        </h5>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
        @endforeach
    </section>


@endsection
