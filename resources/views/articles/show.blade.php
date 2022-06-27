@extends('articles.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">article Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Titre : {{ $article->titre }}</h5>
        <p class="card-text">Image : {{ $article->image }}</p>
        <p class="card-text">Description : {{ $article->description }}</p>
        <p class="card-text">Vidéo : {{ $article->video }}</p>
  </div>
       
    <hr/>
  
  </div>
</div>