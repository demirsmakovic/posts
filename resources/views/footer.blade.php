<div class="footer">
  <h1>Last 3 posts</h1>
  <ul>
    @foreach ($latestPosts as $post)
        <a href="/post/{{ $post->id }}">Post by {{ $post->author }}</a> | 
    @endforeach
  </ul>
</div>