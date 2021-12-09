@extends('layout')

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1B304F">
    <div class="container">
    <img src="mrWeather.png" style="width:250px;height:80px;">
        <div class="d-flex ms-auto">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn" style="background-color: #86AED2" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<div class="row justify-content-center p-4">
    <div class="col-sm-8">
        <div class="card" style="background-color: #e6eeff">
            <div class="card-body">
                <div class="col-sm-12" style="margin-bottom :10pt">
                    <div class="card" style="background-color: #4D678E">
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
                        <div class="card" style="background-color: #86AED2">
                            <div class="card-body">
                                <h5 class="card-title">Forecast</h5>
                                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                                     when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap 
                                                     into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                                     passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card" style="border-color: #4D678E">
                            <div class="card-body">
                                <h5 class="card-title">Weather Map</h5>
                                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                                     when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap 
                                                     into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                                     passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>

@endsection