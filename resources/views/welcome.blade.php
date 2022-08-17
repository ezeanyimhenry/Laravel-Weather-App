<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather App</title>
    @vite(['resources/js/app.js'])
</head>
<body class="bg-dark text-white">
    <div class="container">
        {{-- <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtIwSn1wwMtJuRZBk8Jp8P1T1A8s_AKV4&libraries=places&callback=initMap">
</script> --}}
        <div class="row">
            <div class="col-12 d-flex justify-content-center my-5 p-3 mh-100">
                <div class="shadow p-3 mb-5 rounded w-50">
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                    <h1 style="font-size: 60px; font-weight:900;">{{ round($response['main']['temp']) }}°C</h1>
                                </div>
                                <div class="col-6">
                                    <p style="font-weight: 700;">{{ $response['weather']['0']['main'] }}</p>
                                    <p>Toronto, Canada:</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <h1 class="d-flex flex-row-reverse">icon</h1>
                        </div>
                        <hr class="my-2">
                    </div>
                    <div class="row text-center py-3 my-auto">
                        <div class="col-3">MON</div>
                        <div class="col-6"><span>icon</span> Mostly cloudy throughout the day</div>
                        <div class="col-3"><p class="my-0">4°C</p><p class="my-0">4°C</p> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>