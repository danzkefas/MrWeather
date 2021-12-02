<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index(){
        $location = "Bandung";
        $apiKey = config('services.openweathermap.key');

        //Current Weather API
        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q={$location}&appid={$apiKey}&units=metric");
        $responseJSON = $response->json();

        $lat = $responseJSON['coord']['lat'];
        $lon = $responseJSON['coord']['lon'];

        //One Call API
        $responseFuture = Http::get("https://api.openweathermap.org/data/2.5/onecall?lat={$lat}&lon={$lon}&exclude=current,minutely,hourly,alerts&appid={$apiKey}&units=metric");
        $responseFutureJSON = $responseFuture->json();

        dd($responseFutureJSON);
        return view('index');
    }
}
