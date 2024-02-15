<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <h1 class="text-center">TRENI DAL MONDO</h1>
    <div class="container">
        <div class="row">
            <div class="content">
                @foreach ($trains as $train)
                    <div class="col-3 p-4">
                        <div class="card " style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $train->agency }}</h5>
                                <p class="card-subtitle mb-2 text-danger">
                                    <span class="text-black">id
                                        train : </span>{{ $train->id_train }}
                                </p>
                                <p class="card-subtitle mb-2 text-primary"><span class="text-black">departure station :
                                    </span>{{ $train->departure_station }}</p>
                                <p class="card-text text-success"><span class="text-black">departure time :
                                    </span>{{ $train->departure_time }}</p>
                                <p class="card-subtitle mb-2 text-primary"><span class="text-black">arrival station :
                                    </span>{{ $train->arrival_station }}</p>
                                <p class="card-text text-success"><span class="text-black">arrival time :
                                    </span>{{ $train->arrival_time }}</p>
                                <p class="card-text"><span class="text-black">carriage number :
                                    </span>{{ $train->carriage_number }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
