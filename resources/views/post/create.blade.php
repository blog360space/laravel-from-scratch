@extends('layout.master')

@section('content')
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    <h1>Create a post</h1>
    <form method="POST" action="/post">
      {{ csrf_field() }}
      <div class="form-group">   
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Title">
      </div>   
      <div class="form-group">   
        <label for="body">Body</label>   
        <textarea class="form-control" id="body" name="body"></textarea>        
      </div>         
      <button type="submit" class="btn btn-default">Publish</button>   
    </form>
</div>
@endsection