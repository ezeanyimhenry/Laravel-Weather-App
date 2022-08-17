<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class weatherController extends Controller
{
    public function index() {
        $apiKey= config('services.openweather.key');
        $responses = Http::get('https://api.openweathermap.org/data/2.5/weather?lat=32&lon=149&appid='.$apiKey.'&units=metric');
        $response= $responses->collect()->toArray();
        // var_dump($response);
        // die();
        return view('welcome')->with('response', $response);
    }
}
