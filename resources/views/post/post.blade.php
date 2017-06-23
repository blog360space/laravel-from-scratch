<a href="/post/{{$post->id}}">
    <h2 class="post-title">
        {{ $post->title }}
    </h2>

</a>
<p class="post-meta">
Posted by {{ $post->user->name }} on
    {{ $post->created_at->toFormattedDateString() }}

    <br>
    @if (count($post->tags))
    Tags @foreach ($post->tags as $tag)
    <a href="/post/tag/{{ $tag->name }}">{{ $tag->name }}</a> 
    @endforeach
    @endif
</p>
{{ $post->body }}