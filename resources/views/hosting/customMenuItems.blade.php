@foreach($items as $item)
    <li class="parent" {{ (URL::current() == $item->url()) ? "class=active" : ""}}>
        <a href="{{ $item->url() }}">{{ $item->title }}</a>
        @if($item->hasChildren())
            <ul class="sub">
                <li class="parent">
                    @include(env('THEME').'.customMenuItems', ['items'=>$item->children()])
                </li>
            </ul>
        @endif
    </li>
@endforeach
