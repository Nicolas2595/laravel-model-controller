<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset("css/home.css") }}">

        <title>Laravel-model-controller</title>
       
    </head>
    <body>

        <h1>{{ $title }}</h1>
       
        <div class="cards-container">

            @foreach ($movies as $movie)
    
            <div class="card">
    
                <h3>{{ $movie->title }}</h3>
                <h3>{{ $movie->original_title }}</h3>
                <p>{{ $movie->nationality }}</p>
                <strong>{{ $movie->vote }}</strong>

            </div>

            @endforeach

        </div>                
                
    </body>
</html>
