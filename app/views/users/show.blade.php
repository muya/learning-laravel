@extends('layouts.detail')

@section('content')
<h2>Hello {{ $user->username }}</h2>
<div class="row">
<div class="col s12 m7">
  <div class="card">
    <div class="card-image">
      <img src="{{ URL::asset('assets/img/office.jpg')}}">
    </div>
    <div class="card-content">
      <span class="card-title grey-text darken-4">{{ $user->username }} <i class="mdi-navigation-more-vert right"></i></span>

      <p><a href="#">Update Account Info</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text darken-4">{{ $user->username }} <i class="mdi-navigation-close right"></i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
</div>
</div>


@stop

@section('side-menu-content')
{{ link_to('/users/create/', 'Add User', $attributes = array('class' => 'collection-item waves-effect'))}}
{{ link_to('/users', 'All Users', $attributes = array('class' => 'collection-item waves-effect'))}}
@stop
