@extends('articles.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Article Page</div>
  <div class="card-body">
      
      <form action="{{ url('createTuto') }}" method="post">
        {!! csrf_field() !!}
        <label>Titre</label><br/>
        <input type="text" name="titre" id="titre" class="form-control"><br/>
        <label>Image</label><br/>
        <input type="text" name="image" id="image" class="form-control"><br/>
        <label>Description</label><br/>
        <input type="textarea" name="description" id="description" class="form-control"><br/>
        <label>Vidéo</label><br/>
        <input type="text" name="video" id="video" class="form-control"><br/>
        <input type="submit" value="Save" class="btn btn-success"><br/>
    </form>
   
  </div>
</div>
 
@stop