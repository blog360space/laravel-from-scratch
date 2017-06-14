@extends('layout.master')

@section('content')
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    
   @include('post.post')   
   
   <div class="comments">
       <ul class="list-group">
       @foreach($post->comments as $comment)
       <li class="list-group-item">       
           <strong>{{$comment->created_at->diffForHumans()}}</strong>
        {{$comment->body}}
       </li>
       @endforeach
       </ul>
   </div>
   
   {{-- show comment --}}    
   @include('layout.create-comment')
</div>
@endsection