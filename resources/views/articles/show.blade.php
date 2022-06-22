@extends('articles.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">article Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Titre : {{ $articles->titre }}</h5>
        <p class="card-text">Image : {{ $articles->image }}</p>
        <p class="card-text">Description : {{ $articles->description }}</p>
        <p class="card-text">Vidéo : {{ $articles->video }}</p>
  </div>
       
    <hr/>
  
  </div>
</div>