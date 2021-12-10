@extends('layout')

@section('content')
<header>
    <nav class="navbar navbar-dark" style="background-color: #1B304F">
        <div class="container p-2">
            <a href="{{ route('index') }}"><img src="{{ asset('img/mrWeather.png') }}" alt="logo" id="logo"></a>
            <div class="col-sm-4">
                <form action="{{ route('index') }}" method="GET">
                    <div class="input-group">
                        <input type="search" name="searchQuery" class="form-control" placeholder="Search City" />
                        <button type="submit" class="btn buttonSearch">
                            <span data-feather="search"></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </nav>
</header>

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <main class="px-3">
        @isset($responseJSON)
            <div class="container text-white rounded-top main-weather">
                <div class="row p-4 d-flex align-items-center">
                    <div class="col col-sm-3 text-center">
                        <div class="row">
                            <h1 class="m-0 fw-bold">{{ round($responseJSON['main']['temp']) }}&#176;C</h1>
                        </div>
                        <div class="row">
                            <h6 class="m-0">Feels like {{ round($responseJSON['main']['feels_like']) }}&#176;C<h6>
                        </div>
                    </div>
                    <div class="col col-sm-5">
                        <div class="row">
                            <span class="fw-bold p-0 fs-5">{{ ucfirst($responseJSON['weather'][0]['description']) }}</span>
                        </div>
                        <div class="row">
                            <span class="fs-6 p-0">{{ $responseJSON['name'] }}, {{ $responseJSON['sys']['country'] }}</span>
                        </div>
                    </div>
                    <div class="col col-sm-3 p-0 text-end">
                        <img src="http://openweathermap.org/img/wn/{{ $responseJSON['weather'][0]['icon'] }}@4x.png" alt="weather_icon">
                    </div>
                </div>
            </div>
            <!-- Looping Side -->
            <div class="container text-white rounded-bottom loop">
                <!-- Loop Here -->
                @for ($i = 1; $i <= 5; $i++)
                <div class="row p-1 d-flex align-items-center">
                    <div class="col col-sm-2 text-center">
                        {{ strtoupper(\Carbon\Carbon::createFromTimestamp($responseFutureJSON['daily'][$i]['dt'])->format('D')) }}
                    </div>
                    <div class="col col-sm-7">
                        <img src="http://openweathermap.org/img/wn/{{ $responseFutureJSON['daily'][$i]['weather'][0]['icon'] }}.png" alt="weather_icon"> {{ ucfirst($responseFutureJSON['daily'][$i]['weather'][0]['description']) }}
                    </div>
                    <div class="col col-sm-3 text-end">
                        <div class="row">
                            Max: {{ round($responseFutureJSON['daily'][$i]['temp']['max']) }}&#176;C
                        </div>
                        <div class="row">
                            Min: {{ round($responseFutureJSON['daily'][$i]['temp']['min']) }}&#176;C
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        @endisset
        @empty($responseJSON)
            <div class="container text-white rounded-3 main-weather">
                <div class="row p-2 d-flex text-center">
                    <h1>{{ $responseCode }} | {{ $responsePhr }}</h1>
                </div>
            </div>
        @endempty
    </main>

    <footer class="footer fixed-bottom text-white-50 text-center py-3 bg-dark">
        <span>Powered by OpenWeatherMap API</span>
    </footer>

</div>

@endsection
