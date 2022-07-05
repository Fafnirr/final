<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('image/bmx-logo-white.png') }}">
        <title>Profil</title>
    </head>
    <body>
        @include('layouts.header')

        <h1 class="profilTitle">Profil</h1>
        <p class="welcome"> Bienvenue <span class="empty">{{ $user->nom }}</span> {{ $user->prenom}}</p>
        <section class="formSection">
            <form class="updateForm" action="{{ url('update/'.$user->id) }}" method="post">
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" value="{{ $user->nom }}">
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="prenom" value="{{ $user->prenom }}">
                    </div>
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="email"  value="{{ $user->email }}">
                </div>
                <div class="formBtnCont">
                    <input type="submit" value="Mettre a Jour" class="btn">
                </div>
            </form>
        </section>
        @if ($user->role == 'admin')
            <div class="links">
                @auth
                <br>
                    <button type="submit" class="logoutBtn">
                        <a href="{{ url('/createArticle') }}">Ajouter un Article</a>
                    </button>
                    <br><br>
                    <button type="submit" class="logoutBtn">
                        <a href="{{ url('/createTuto') }}">Ajouter un Tutoriel</a>
                    </button>
                    <br><br>
                @endauth
            </div>
        @endif
        <button type="submit" class="logoutBtn">
            <a href="/delete/{id}">Supprimer le compte</a>
        </button>
        <br><br>
        <button type="submit" class="logoutBtn">
            <a href="/logout">Se deconnecter</a>
        </button>
    </body>
</html>