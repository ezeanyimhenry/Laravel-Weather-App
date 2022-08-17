<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class weatherController extends Controller
{
    public function index() {
        $responses = Http::get('https://api.openweathermap.org/data/2.5/weather?lat=35&lon=139&appid=e8d476d9fa9df254c69970ce35474b19&units=metric');
        $response= $responses->collect()->toArray();
        // var_dump($response);
        // die();
        return view('welcome')->with('response', $response);
    }
}
