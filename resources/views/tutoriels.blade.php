<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/index.css')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('image/bmx-logo-white.png') }}">
        <title>Tutoriels</title>
    </head>
    <body>
        @include('layouts.header')
        <section id="topSection">
            <div class="cont">
                <div class="titleCont">
                    <h1 class="title">Nos<br/><span class="empty">tutoriels</span></h1>
                </div>
                <div class="imgCont">
                    <img src="{{ asset('image/bmx-race.png') }}" class="banner" alt="">
                </div>
            </div>
        </section>
        <section id="bottomCont" class="container-fluid">
            <div class="row d-flex justify-content-center">
                @foreach ($tutos as $tuto)
                <div class="col-md-4 col-12 col-lg-3 mb-2">
                    <div class="card">
                        <img src="{{ $tuto->image }}" class="card-img-top" style="height: 18em" id="card-image" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">{{ $tuto->titre }}</h4>
                            <p class="card-text">{{ $tuto->description }}</p>
                            <a href="tutoDetail/{{$tuto -> id}}" id="btn" class="btn">Voir plus</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </body>
</html>