@extends('layouts.content-with-side-menu')
@section('mainContent')
@yield('content')
@stop
@section('side-menu-content')
{{ link_to('/users/', 'All Users', $attributes = array('class' => 'collection-item waves-effect'))}}
@stop