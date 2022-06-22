@extends('articles.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">tutoriels Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Titre : {{ $tutos->titre }}</h5>
        <p class="card-text">Image : {{ $tutos->image }}</p>
        <p class="card-text">Description : {{ $tutos->description }}</p>
        <p class="card-text">Vidéo : {{ $tutos->video }}</p>
  </div>
       
    <hr/>
  
  </div>
</div>