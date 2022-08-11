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
        <div class="row">
            <div class="col-12 d-flex justify-content-center my-5 p-3 mh-100">
                <div class="shadow p-3 mb-5 rounded w-50">
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                    <h1 style="font-size: 60px; font-weight:900;">30°C</h1>
                                </div>
                                <div class="col-6">
                                    <p style="font-weight: 700;">Cloudy</p>
                                    <p>Toronto, Canada</p>
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