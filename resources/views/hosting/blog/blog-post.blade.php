<div class="container">
    <div class="row">
<div class="content blog blog-post col-sm-9 col-md-9">
    <article class="post">
        <div class="post-image"><img src="{{ asset(env('THEME')).'/images/content/articles/'. $post->image }}" width="880" height="382" alt="" title=""></div>
        <div class="entry-content">
            {!! $post->content !!}
        </div>
        <footer class="entry-meta">
            <span class="autor-name">{{ $post->user->name }}</span>,
            <span class="time">{{ \Carbon\Carbon::parse($post->created_at )->locale('uk')->isoFormat('dddd, D MMM Y, H:m:s') }}</span>
            <span class="separator">|</span>
            <span class="meta">Posted in <a href="#">Travel</a>, <a href="#">Movies</a>, <a href="#">Sports</a></span>
            <span class="comments-link pull-right"> <a href="#">3 comment(s)</a> </span>
        </footer>
    </article><!-- .post -->
</div>