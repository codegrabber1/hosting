<div class="container">
    <div class="row">
        <div class="content blog grid-layout col-sm-9 col-md-9">
    <div class="row">
        @if($posts)
            @foreach($posts as $post)
        <div class="col-md-6">
            <article class="post">
                <div class="post-image"><img src="{{ asset(env('THEME')).'/images/content/articles/'. $post->image }}" width="100%" height="400" alt="" title=""></div>
                <h2 class="entry-title"><a href="{{ route('blog.post', $post->id) }}">{{ $post->title }}</a></h2>
                <div class="entry-content">
                    {{ Str::limit($post->excerpt, 100) }}
                </div>
                <footer class="entry-meta">
                    <span class="autor-name">{{ $post->user->name }}</span>,
                    <span class="time">{{ \Carbon\Carbon::parse($post->created_at )->locale('uk')->isoFormat('D MMM Y, H:m:s') }}</span>
                    <span class="comments-link pull-right">
              <a href="#">3 comment(s)</a>
            </span>
                </footer>
            </article><!-- .post -->
        </div>
            @endforeach
        @endif
    </div>
    <div class="pagination-box pull-right">
        @if($posts->total() > $posts->count())
        <ul class="pagination">
            <li>{{ $posts->links() }}</li>
        </ul>
        @endif
    </div><!-- .pagination-box -->
</div>