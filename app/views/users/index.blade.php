@extends('layouts.admin')

@section('content')
<div class="">
    <h3>Users</h3>
    @if ($users->count() < 1)
        <div class="card">
            <div class="card-content dark-text">
              <p>Sorry, no users available yet. Check back later.</p>
            </div>
            <div class="card-action">
              {{ link_to('/users/create', 'Add a User', $attributes = array('class' => 'waves-effect waves-red'))}}
            </div>
          </div>

    @else
    <table class="bordered">
        <thead>
            <tr>
                <th>Username</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ link_to("/users/{$user->username}", $user->username)}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @endif
</div>
@stop

