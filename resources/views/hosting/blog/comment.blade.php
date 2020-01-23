@foreach($comments as $comment)
<li id="li-comment-{{ $comment->id }}" >
    <div id="comment-{{ $comment->id }}">
        @php($hash=isset($comment->email) ? md5($comment->email) : md5($comment->user->email))
        <img class="avatar" width="84" height="84" src="https://en.gravatar.com/avatar/{{ $hash }}?d=mm&s=84" alt="">
        <div class="meta">
            <span>{{ $comment->commentName  }}</span>,
            <span class="time">{{ \Carbon\Carbon::parse($post->created_at )->locale('uk')->isoFormat('dddd, D MMM Y, H:m:s') }}</span>
            <span class="reply pull-right"><a class="comment-reply-link" href="#respond" onclick="return addComment.moveForm('comment-{{$comment->id}}','{{$comment->id}}','respond', '{{$comment->blog_post_id}}')">reply</a></span>
        </div>
        <p class="description">
            {{ $comment->comment }}
        </p>
    </div>
    @if(isset($com[$comment->id]))
        <ul class="commentChild">
            @include(env('THEME').'.blog.comment', ['comments'=>$com[$comment->id]])
        </ul>
    @endif
</li>
@endforeach