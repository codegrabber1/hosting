@if($menu)
    <ul class="collapse navbar-collapse nav navbar-nav navbar-center">
        @include(env('THEME').'.customMenuItems', ['items' => $menu->roots()])
    </ul>
@endif