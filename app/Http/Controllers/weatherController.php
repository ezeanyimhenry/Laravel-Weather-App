<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class weatherController extends Controller
{
    public function index() {
        $apiKey= config('services.openweather.key');
        $dailys= Http::get('api.openweathermap.org/data/2.5/forecast?lat=6.44998&lon=7.5&appid='.$apiKey.'&units=metric&cnt=6');
        $responses = Http::get('https://api.openweathermap.org/data/2.5/weather?lat=6.44998&lon=7.5&appid='.$apiKey.'&units=metric');
        $response= $responses->collect()->toArray();
        $daily= $dailys->collect()->toArray();
        return view('welcome', compact('response','daily'));
    }
}
