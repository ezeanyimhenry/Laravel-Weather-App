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
    <script src="\search.js"></script>
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
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                    <h1 style="font-size: 60px; font-weight:900;">
                                        {{ round($response['main']['temp']) }}°C</h1>
                                </div>
                                <div class="col-6">
                                    <p style="font-weight: 700;">{{ $response['weather']['0']['main'] }}</p>
                                    <p>Toronto, Canada:</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <h1 class="d-flex flex-row-reverse"><img
                                    src="http://openweathermap.org/img/wn/{{ $response['weather']['0']['icon'] }}@2x.png"
                                    alt=""></h1>
                        </div>
                        <hr class="my-2">
                    </div>
                    <div class="row text-center py-3 my-auto">
                        <div class="col-3">MON</div>
                        <div class="col-6"><span>icon</span> Mostly cloudy throughout the day</div>
                        <div class="col-3">
                            <p class="my-0">4°C</p>
                            <p class="my-0">4°C</p>
                        </div>
                    </div>
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
                // document.querySelector('#form-address2').value = e.suggestion.administrative || '';
                // document.querySelector('#form-city').value = e.suggestion.city || '';
                // document.querySelector('#form-zip').value = e.suggestion.postcode || '';
            });

        })();
    </script>
</body>

</html>
