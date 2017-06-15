<a href="/post/{{$post->id}}">
    <h2 class="post-title">
        {{ $post->title }}
    </h2>

</a>
<p class="post-meta">
Posted by {{ $post->user->name }} on
    {{ $post->created_at->toFormattedDateString() }}</p>
{{ $post->body }}