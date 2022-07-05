<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('image/bmx-logo-white.png') }}">
        <title>Connexion</title>
    </head>
    <body>
        @include('layouts.header')
        
        <section class="formSection">
            <form action="{{ url('login') }}" class="loginForm" name="loginForm" onsubmit="return(validate());" method="POST">
                {!! csrf_field() !!}
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="formBtnCont">
                    <input type="submit" value="Connexion" class="btn" name="login">
                </div>
            </form>
        </section>
        <p class="textLink">
            Vous n'avez pas de compte ? <a href="{{ url('signup') }}" class="redButton">Inscrivez-vous</a>
        </p>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="{{ asset('js/index.js') }}"></script>
    </body>
</html>