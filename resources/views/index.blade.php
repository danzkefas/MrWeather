@extends('layout')

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <div class="d-flex ms-auto">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-info" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<div class="row justify-content-center p-5">
    <div class="col-sm-8">
        <div class="card">
            <div class="card-body">
                <div class="col-sm-12" style="margin-bottom :10pt">
                    <div class="card bg-secondary">
                        <div class="card-body">
                            <div class="col-sm-3 ms-auto">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-6">
                        <div class="card bg-secondary">
                            <div class="card-body">
                                <h5 class="card-title">Forecast</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card bg-secondary">
                            <div class="card-body">
                                <h5 class="card-title">Weather Map</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>

@endsection