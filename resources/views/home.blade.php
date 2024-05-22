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
        
        @foreach ($train as $trains)
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{ $trains->company }}</h5>
            <p class="card-text">Stazione di partenza: {{ $trains->departure_station }}</p>
            <p class="card-text">Stazione di arrivo: {{ $trains->arrival_station }}</p>
            <p class="card-text">Orario di partenza: {{ $trains->departure_time }}</p>
            <p class="card-text">Orario di arrivo: {{ $trains->arrival_time }}</p>
            <p class="card-text">Codice treno: {{ $trains->train_code }}</p>
            <p class="card-text">Numero di carrozze: {{ $trains->carriages_number }}</p>
            <p class="card-text">
              @if ($trains->cancelled === 1)
                Treno Cancellato
              @elseif ($trains->on_time === 0)  
              Stato del treno: In Orario
              @elseif ($trains->on_time === 1)  
              Stato del treno: In Ritardo
              @endif
            </p>
          </div>
        </div>
      @endforeach
        
      
    </main>

</body>

</html>