@extends('articles.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('createTuto/' .$tuto->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$tuto->id}}" id="id" />
        <label>Titre</label><br/>
        <input type="text" name="titre" id="titre" value="{{ $tuto->titre }}" class="form-control"><br/>
        <label>Image</label><br/>
        <input type="text" name="image" id="image" value="{{ $tuto->image }}" class="form-control"><br/>
        <label>Description</label><br/>
        <input type="textarea" name="description" value="{{ $tuto->description }}" id="description" class="form-control"><br/>
        <label>Vidéo</label><br/>
        <input type="text" name="video" id="video" value="{{ $tuto->video }}" class="form-control"><br/>
        <input type="submit" value="Update" class="btn btn-success"><br/>
    </form>
   
  </div>
</div>
 
@stop