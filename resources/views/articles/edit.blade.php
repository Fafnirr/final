@extends('articles.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Article Page</div>
  <div class="card-body">
      
      <form action="{{ url('createArticle/' .$article->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$article->id}}" id="id" />
        <label>Titre</label><br/>
        <input type="text" name="titre" id="titre" value="{{ $article->titre }}" class="form-control"><br/>
        <label>Image</label><br/>
        <input type="text" name="image" id="image" value="{{ $article->image }}" class="form-control"><br/>
        <label>Description</label><br/>
        <input type="textarea" name="description" value="{{ $article->description }}" id="description" class="form-control"><br/>
        <label>Vidéo</label><br/>
        <input type="text" name="video" id="video" value="{{ $article->video }}" class="form-control"><br/>
        <input type="submit" value="Update" class="btn btn-success"><br/>
    </form>
   
  </div>
</div>
 
@stop