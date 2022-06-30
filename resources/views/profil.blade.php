<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        @include('layouts.header')

        <h1 class="title">Profil</h1>
        <p> Bienvenue {{ $user->nom }}</p>
        <div>
            <form action="">
                <label for="">Nom</label>
                <input type="text" name="name" id="name" value="{{ $user->nom }}">
                <label for="">Prénom</label>
                <input type="text" name="prenom" id="prenom" value="{{ $user->prenom }}">
                <label for="">Email</label>
                <input type="text" name="email" id="email" value="{{ $user->email }}">
                <input type="submit" value="Save">
            </form>
        </div>
    </body>
</html>