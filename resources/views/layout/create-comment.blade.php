<div class="card">
    <div class="card-block">
        <form action="/post/{{ $post->id }}/comment" method="POST">
            {{ csrf_field() }}            
            <div class="form-group">
                <textarea name="body" id="body" class="form-control" placeholder="Your comment here."></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Comment</button>
            </div>
        </form>
        
        @include('layout.errors')
    </div>
</div>