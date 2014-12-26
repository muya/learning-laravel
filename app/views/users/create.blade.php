@extends('layouts.new')

@section('content')
<h3>Add New User</h3>
{{ Form::open(['route' => 'users.store']) }}
<div>
    {{ Form::label('email', 'Email: ')}}
    {{ Form::text('email') }}
    {{ $errors->first('email', '<span>:message</span>') }}
</div>
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
    {{ Form::button('Add User', $attributes = ['class' => 'waves-effect btn', 'type' => 'submit']) }}
</div>
{{ Form::close() }}
@stop
