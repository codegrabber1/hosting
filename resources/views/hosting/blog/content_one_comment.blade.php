<li id="li-comment-{{ $data['id'] }}" class="lightComment">
    <div id="comment-{{ $data['id'] }}">

        <img class="avatar" width="84" height="84" src="https://en.gravatar.com/avatar/{{ $data['hash'] }}?d=mm&s=84" alt="{{ $data['commentName']  }}">
        <div class="meta">
            <span>{{ $data['commentName']  }}</span>,
            {{--<span class="time">{{ \Carbon\Carbon::parse($data['created_at'] )->locale('uk')->isoFormat('dddd, D MMM Y, H:m:s') }}</span>--}}
        </div>
        <p class="description">
            {{ $data['comment'] }}
        </p>
    </div>

</li>