<a href="/post/{{$post->id}}">
    <h2 class="post-title">
        {{ $post->title }}
    </h2>

</a>
<p class="post-meta">{{ $post->created_at->toFormattedDateString() }}</p>
{{ $post->body }}