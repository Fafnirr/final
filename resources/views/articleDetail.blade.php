<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $article->titre }}</title>
    </head>
    <body>
        @include('layouts.header')
        <div class="mainContainer">
            <section id="topSection">
                <div class="cont">
                    <div class="titleCont">
                        <h1 class="title">{{ $article->titre }}</h1>
                    </div>
                    <div class="imgCont">
                        <img src="{{ $article->image }}" alt="" class="banner">
                    </div>
                </div>
            </section>
            <div class="description">
                <p class="">{{ $article->description }}</p>
            </div>
            <div class="videoCont">
                <iframe class="video" src="{{ $article->video }}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </body>
</html>