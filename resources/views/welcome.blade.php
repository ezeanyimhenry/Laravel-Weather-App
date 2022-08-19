<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather App</title>
    @vite(['resources/js/app.js'])
    <style>
        .ap-dropdown-menu {
            color: black;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/places.js@1.19.0"></script>
</head>

<body class="bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="col-12 mt-5 p-3 mh-100 w-50" id="app">
                    <input type="search" id="city" class="form-control w-100" placeholder="search location">
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center mb-5 p-3 mh-100">
                <div class="shadow p-3 mb-5 rounded w-50">
                    <div class="row">
                        <div class="col-9">
                            <div class="row">
                                <div class="col-6">
                                    <h1 style="font-size: 50px; font-weight:900;" id="temp">
                                        {{ round($response['main']['temp']) }}°C</h1>
                                </div>
                                <div class="col-6">
                                    <p style="font-weight: 700;" id="condition">{{ $response['weather']['0']['main'] }}</p>
                                    <p id="form-city">Enugu, Nigeria</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <h1 class="d-flex flex-row-reverse"><img id="icon"
                                    src="http://openweathermap.org/img/wn/{{ $response['weather']['0']['icon'] }}@2x.png"
                                    alt=""></h1>
                        </div>
                        <hr class="my-2">
                    </div>
                    @foreach ( $daily['list'] as $day)
                        <div class="row text-center py-3 my-auto">
                            <div class="col-3">{{ gmdate('D, h:i a', $day['dt']) }}</div>
                            <div class="col-6"><span>icon</span> Mostly cloudy throughout the day</div>
                            <div class="col-3">
                                <p class="my-0">4°C</p>
                                <p class="my-0">4°C</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script>
        (function() {
            var placesAutocomplete = places({
                container: document.querySelector('#city'),
                type: 'city',
                aroundLatLngViaIP: false,
                templates: {
                    value: function(suggestion) {
                        return suggestion.name;
                    }
                }
            });

            placesAutocomplete.on('change', function resultSelected(e) {
                console.log(e.suggestion);
                console.log(e.suggestion.latlng.lat);
                console.log(e.suggestion.latlng.lng);
                // document.querySelector('#form-address2').value = e.suggestion.administrative || '';
                document.querySelector('#form-city').innerHTML = e.suggestion.name + ', ' + e.suggestion.country || '';
                // document.querySelector('#form-zip').value = e.suggestion.postcode || '';
                
                fetch('/info?lat='+e.suggestion.latlng.lat+'&lng='+e.suggestion.latlng.lng)
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    document.querySelector('#temp').innerHTML = Math.round(data.main.temp) + '°C';
                    document.querySelector('#condition').innerHTML = data.weather[0].main;
                    document.querySelector('#icon').src = 'http://openweathermap.org/img/wn/' + data.weather[0].icon + '@2x.png';
                })
            });

        })();
    </script>
</body>

</html>
