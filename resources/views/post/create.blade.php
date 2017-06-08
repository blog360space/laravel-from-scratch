@extends('layout.master')

@section('content')
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    <form>
      <div class="form-group">
        <label for="post-title">Title</label>
        <input type="email" class="form-control" id="post-title" placeholder="Title">
      </div>
      <div class="form-group">
        <label for="post-body">Body</label>
        <input type="password" class="form-control" id="post-body" placeholder="Password">
      </div>      
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
@endsection