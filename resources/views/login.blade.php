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
            <form action="{{ url('login') }}" class="loginForm" method="POST">
                {!! csrf_field() !!}
                <div>
                    <label for="email">E-mail</label><br/>
                    <input class="inputs" type="email" name="email" id="email"><br/>
                    <label for="password">Mot de passe</label><br/>
                    <input class="inputs" type="password" name="password" id="password"><br/>
                <input type="submit" value="Envoyer" name="login">
            </form>
        </section>
    </body>
</html>