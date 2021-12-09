@extends('layout')

@section('content')
<header>
    <nav class="navbar navbar-dark" style="background-color: #1B304F">
        <div class="container p-2">
            <img src="{{ asset('img/mrWeather.png') }}" alt="logo" id="logo">
            <div class="col-sm-4">
                <form action="">
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
        <div class="container text-white rounded-top main-weather">
            <div class="row p-4 d-flex align-items-center">
                <div class="col col-sm-3 text-center">
                    <div class="row">
                        <h1 class="m-0 fw-bold">4&#176;C</h1>
                    </div>
                    <div class="row">
                        <h6 class="m-0">Feels Like 20&#176;C<h6>
                    </div>
                </div>
                <div class="col col-sm-6">
                    <div class="row">
                        <span class="fw-bold p-0">Rainy Days</span>
                    </div>
                    <div class="row">Bandung, Indonesia</div>
                </div>
                <div class="col col-sm-3 text-end">
                    Icon
                </div>
            </div>
        </div>
        <!-- Looping Side -->
        <div class="container text-white rounded-bottom loop">
            <!-- Loop Here -->
            <div class="row p-1 d-flex align-items-center">
                <div class="col col-sm-3 text-center">
                    DAYS
                </div>
                <div class="col col-sm-6">
                    icon Rainy Days
                </div>
                <div class="col col-sm-3">
                    <div class="row text-end">
                        MAX_TEMP
                    </div>
                    <div class="row text-end">
                        MIN_TEMP
                    </div>
                </div>
            </div>
            <div class="row p-1 d-flex align-items-center">
                <div class="col col-sm-3 text-center">
                    DAYS
                </div>
                <div class="col col-sm-6">
                    icon Rainy Days
                </div>
                <div class="col col-sm-3">
                    <div class="row text-end">
                        MAX_TEMP
                    </div>
                    <div class="row text-end">
                        MIN_TEMP
                    </div>
                </div>
            </div>
            <div class="row p-1 d-flex align-items-center">
                <div class="col col-sm-3 text-center">
                    DAYS
                </div>
                <div class="col col-sm-6">
                    icon Rainy Days
                </div>
                <div class="col col-sm-3">
                    <div class="row text-end">
                        MAX_TEMP
                    </div>
                    <div class="row text-end">
                        MIN_TEMP
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer fixed-bottom text-white-50 text-center py-3 bg-dark">
        <span>Powered by OpenWeatherMap API</span>
    </footer>

</div>

@endsection