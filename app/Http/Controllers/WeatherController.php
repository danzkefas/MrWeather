<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class WeatherController extends Controller
{
    public function index(Request $request)
    {
        $location = "Bandung";

        if ($request->has('searchQuery')) {
            # code...
            $location = $request->get('searchQuery');
        }

        $apiKey = config('services.openweathermap.key');


        //Current Weather API
        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q={$location}&appid={$apiKey}&units=metric");
        if ($response->getStatusCode() == 200) {
            # code...
            $responseJSON = $response->json();
            $lat = $responseJSON['coord']['lat'];
            $lon = $responseJSON['coord']['lon'];

            //One Call API
            $responseFuture = Http::get("https://api.openweathermap.org/data/2.5/onecall?lat={$lat}&lon={$lon}&exclude=current,minutely,hourly,alerts&appid={$apiKey}&units=metric");
            $responseFutureJSON = $responseFuture->json();

            //Set Session for Insight
            if(!Session::has('hotTemp') || !Session::has('coldTemp')){
                Session::put('hotTemp', [ $responseJSON['name'], $responseJSON['main']['temp'] ]); 
                Session::put('coldTemp', [ $responseJSON['name'], $responseJSON['main']['temp'] ]); 
            } else {
                $lastHotTemp = Session::get('hotTemp')[1];
                $lastColdTemp = Session::get('coldTemp')[1];
                if( $responseJSON['main']['temp'] > $lastHotTemp ){
                    Session::put('hotTemp', [ $responseJSON['name'], $responseJSON['main']['temp'] ]);
                }

                if( $responseJSON['main']['temp'] < $lastColdTemp ){
                    Session::put('coldTemp', [ $responseJSON['name'], $responseJSON['main']['temp'] ]);
                }
                
            }
            return view('index', compact('responseJSON', 'responseFutureJSON'));
        } else {
            $responseCode = $response->getStatusCode();
            $responsePhr = $response->getReasonPhrase();
            return view('index', compact('responseCode', 'responsePhr'));
        }

        // dd($responseJSON);
    }
}
