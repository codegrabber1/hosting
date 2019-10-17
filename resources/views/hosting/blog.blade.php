@extends(env('THEME').'.layouts.main')
@section('topmenu')
  {!! $topmenu !!}
@stop
@section('header')
    {!! $header !!}
@stop
@section('content')
    {!! $content !!}
@stop
@section('sidebar')
{{--    {!! $sidebar !!}--}}
@stop
@section('footer')
    @include('hosting.footer')
@stop