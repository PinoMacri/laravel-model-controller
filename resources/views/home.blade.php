<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <div class="row p-5">
            @forelse ($movies as $movie)
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <h6 class="card-title">{{ $movie->original_title }}</h6>
                        <p class="card-text">Nazionalità: {{ $movie->nationality }}</p>
                        <p class="card-text">Data d'uscita: {{ $movie->date }}</p>
                        <p class="card-text">Voto: {{ $movie->vote }}</p>
                    </div>
                </div>
            @empty
                <h2>Non ci sono film</h2>
            @endforelse
        </div>
    </div>
</body>

</html>
