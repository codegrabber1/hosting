@extends(env('THEME').'.layouts.main')
@section('topmenu')
    {!! $topmenu !!}
@stop
@section('slider')
    {!! $slides !!}
    <!-- .rs-slider -->
@stop
@section('pricing')
   {!! $pricing !!}
@stop
@section('content')
    {!! $content  !!}
@stop
@section('footer')
    @include('hosting.footer')
@stop