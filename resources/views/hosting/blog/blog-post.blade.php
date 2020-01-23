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
            <span class="comments-link pull-right"> <a href="#comments"> {{ count($post->comments) }} comment(s)</a> </span>
        </footer>
    </article><!-- .post -->

    <div id="comments">
    <div class="wrap_result"></div>
    <h3 class="title slim">Comments</h3>
    @if(count($post->comments) > 0 )
    @php($com = $post->comments->groupBy('parent_id') )

    <ul class="commentlist">
        @foreach($com as $k => $value)
            @if($k !== 0)
                @break;
            @endif
            @include(env('THEME').'.blog.comment', ['comments'=> $value])
        @endforeach

    </ul>
     @endif
    <div id="respond">
        <h3 class="title slim">Leave a Reaply
            <small><a rel="nofollow" id="cancel-comment-reply-link" href="#respond" style="display:none;">Cancel reply</a></small></h3>
        <form action="{{ route('comment.store') }}" method="post" id="commentform" class="comments-form">
            @csrf
            @if(!Auth::check())
            <label>Name: <span class="required">*</span></label>
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <input class="form-control" name="commentName" type="text">
                </div>
            </div>

            <label>Email Adress: <span class="required">*</span></label>
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <input class="form-control" name="email" type="email">
                </div>
            </div>
             @endif
            <label>Comment: </label>
            <div class="row">
                <div class="comment-box col-sm-10 col-md-10">
                    <textarea class="form-control" name="comment" ></textarea>
                    <i>Note: HTML is not translated!</i>
                </div>
            </div>

            <div class="clearfix"></div>
            <div class="button-set">
                <span class="required pull-right"><b>*</b> Required Field</span>
                <input type="hidden" name="is_published" id="is_published" value="0">
                <input type="hidden" id="comment_post_ID" name="comment_post_ID" value="{{ $post->id }}">
                <input type="hidden" id="comment_parent" name="comment_parent" value="0">
                <input type="submit" id="submitComment" class="btn btn-default" value="Submit">
            </div>
        </form>
    </div>
    </div>
</div>