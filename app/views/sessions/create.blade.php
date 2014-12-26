@extends('layouts.content-without-side-menu')
@section('mainContent')
<div class="login">
    <h1 class="header center">Sign In</h1>
    {{ Form::open(['route' => 'sessions.store']) }}
    <div>
        {{ Form::label('username', 'Username: ')}}
        {{ Form::text('username') }}
        {{ $errors->first('username', '<span>:message</span>') }}
    </div>
    <div>
        {{ Form::label('password', 'Password: ')}}
        {{ Form::password('password') }}
        {{ $errors->first('password') }}
    </div>
    <div>
        {{ Form::button('Sign In', $attributes = ['class' => 'waves-effect btn', 'type' => 'submit']) }}
    </div>
    {{ Form::close() }}
</div>
@stop
