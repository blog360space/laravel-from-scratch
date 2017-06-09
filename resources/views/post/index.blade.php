@extends('layout.master')

@section('content')
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        
        @foreach ($posts as $post)
        <div class="post-preview">
            @include('post.post')

            
        </div>
        @endforeach
        <hr>        
        
        <!-- Pager -->
        <ul class="pager">
            <li class="next">
                <a href="#">Older Posts &rarr;</a>
            </li>
        </ul>
    </div>
@endsection

@section('footer')
<script src="/js/file.js"></script>
@endsection