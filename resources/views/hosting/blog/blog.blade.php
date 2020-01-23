@extends(env('THEME').'.layouts.main')
@section('topmenu')
  {!! $topmenu !!}
@stop
@section('header')
    {!! $header !!}
@stop
<div class="container">
    <div class="row">

@section('content')
    {!! $content !!}
@stop

@section('sidebar')
    {!! $sidebar !!}
@stop

    </div>
</div>
@section('footer')
    @include('hosting.footer')
@stop