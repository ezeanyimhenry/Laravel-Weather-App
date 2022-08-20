<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\weatherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [weatherController::class, 'index']);

Route::get('/info', function (Request $request) {
    $lat = $request->input('lat');
    $lng = $request->input('lng');
    $apiKey= config('services.openweather.key');
    $responses = Http::get('https://api.openweathermap.org/data/2.5/weather?lat='.$lat.'&lon='.$lng.'&appid='.$apiKey.'&units=metric');
    $response= $responses->collect()->toJson();
    return $response;
});

Route::get('/daily', function (Request $request) {
    $lat = $request->input('lat');
    $lng = $request->input('lng');
    $apiKey= config('services.openweather.key');
    $responses = Http::get('api.openweathermap.org/data/2.5/forecast?lat='.$lat.'&lon='.$lng.'&appid='.$apiKey.'&units=metric');
    $responsez= $responses->collect();
    foreach($responsez['list'] as $response){
        return $response;
    }
    
});