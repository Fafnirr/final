<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
    </head>
    <body>
        @include('layouts.header')
        
        <section class="formSection">
            <form action="{{ url('signup') }}" class="loginForm" method="POST">
                {!! csrf_field() !!}
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom">
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="formBtnCont">
                    <input type="submit" value="S'inscrire" class="btn" name="store">
                </div>
            </form>
        </section>
        <p class="textLink">
            Vous avez déjà un compte ? <a href="{{ url('login') }}" class="redButton">Connectez-vous</a>
        </p>
    </body>
</html>