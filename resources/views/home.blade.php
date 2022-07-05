<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('image/bmx-logo-white.png') }}">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Accueil</title>
    </head>
    <body>
        <main>
            @include('layouts.header')
            @include('cookie-consent::index')
            <section id="topSection">
                <div class="cont">
                    <div class="titleCont">
                        <h1 class="title">Suivez les <br> dernières infos <br/><span class="empty">compétition</span></h1>
                        <div class="btnCont">
                            @if(Route::has('login'))
                                @auth
                                    
                                @else
                                    <button class="login">
                                        <a class="logLink" href="/login">Se connecter</a>
                                    </button>
                                @endauth
                            @endif
                        </div>
                    </div>
                    <div class="imgCont">
                        <img src="{{ asset('image/bmx-race.png') }}" class="banner" alt="">
                    </div>
                </div>
            </section>
            <section id="midSection">
                <div id="midContainer">
                    <img id="proImg" src="{{ asset('image/pro-bmx.jpg') }}" alt="">
                    <div id="midTextCont">
                        <div id="titleBar">
                            <h3 id="midTitle">Le BMX race <br/> en version courte </h3>
                        </div>
                        <br>
                        <p class="text">Les courses de BMX peuvent être passionnantes à regarder, étant donné la nature imprévisible du déroulement d’une course comme le confirme Saya Sakakibara, la plus grande rideuse australienne de l’histoire. Mais pourquoi cette discipline est-elle si imprévisible ? Parce qu’un coureur se mesure à sept autres concurrents sur un parcours de 300 à 400 mètres spécialement conçu à cet effet, rempli de sauts, de whoops et de virages dangereux. Le premier à franchir la ligne d’arriver en tête l’emporte.</p>
                        <br>
                        <p class="text">« Le BMX race en tant que sport est assez complexe », explique Sakakibara. « Il y a tellement de domaines qui doivent être travaillés : de la force et de la puissance en passant par les temps de réaction ou les compétences technique pour être le plus rapide sur la piste. »</p>
                    </div>
                </div>
            </section>
            <div class="barre">
                <hr>
            </div>
            <section id="bottomCont" class="container-fluid">
                <div class="row d-flex justify-content-center">
                    @foreach ($articles as $article)
                    <div class="col-md-4 col-12 col-lg-3 mb-2">
                        <div class="card">
                            <img src="{{ $article->image }}" class="card-img-top" style="height: 18rem" id="card-image" alt="...">
                            <div class="card-body">
                                <h4 class="card-title">{{ $article->titre }}</h4>
                                <p class="card-text">{{ $article->description }}</p>
                                <a href="articleDetail/{{$article -> id}}" id="btn" class="btn">Voir plus</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
            @include('layouts.footer')
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        </main>
    </body>
</html>