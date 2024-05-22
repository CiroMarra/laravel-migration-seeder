<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Train</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <div class="row justify-content-center">
            @foreach ($train as $trains)
            <div class="col-sm-6 col-md-4 col-lg-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title text-info">{{ $trains->company }}</h1>
                        <p class="card-text fw-bold text-white"><span class="text-primary">Stazione di partenza:</span> {{ $trains->departure_station }}</p>
                        <p class="card-text fw-bold text-white"><span class="text-primary">Stazione di arrivo:</span> {{ $trains->arrival_station }}</p>
                        <p class="card-text fw-bold text-white"><span class="text-primary">Orario di partenza:</span> {{ $trains->departure_time }}</p>
                        <p class="card-text fw-bold text-white"><span class="text-primary">Orario di arrivo:</span> {{ $trains->arrival_time }}</p>
                        <p class="card-text fw-bold text-white"><span class="text-primary">Codice treno:</span> {{ $trains->train_code }}</p>
                        <p class="card-text fw-bold text-white"><span class="text-primary">Numero di carrozze:</span> {{ $trains->carriages_number }}</p>
                        <p class="card-text fw-bold text-white"><span class="text-primary">Stato del treno:</span>
                            @if ($trains->cancelled === 1)
                            <span class="text-danger">Cancellato</span>                   
                            @else
                                @if ($trains->on_time === 0)  
                                <span class="text-success">In Orario</span>    
                                @elseif ($trains->on_time === 1)  
                                <span class="text-warning">In Ritardo</span>    
                                @endif
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        


 
      
    </main>

</body>

</html>