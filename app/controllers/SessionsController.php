<?php

/**
* SessionsController class
*/
class SessionsController extends BaseController
{

    public function create()
    {
        if (Auth::check()) {
            return Redirect::to('/');
        }
        return View::make('sessions.create');
    }

    public function destroy(){
        Auth::logout();
        return Redirect::to('login');
    }

    public function store(){
        if (Auth::attempt(Input::only('username', 'password'))) {
            return Redirect::to('/');
        }
        else{
            return 'Failed';
        }
    }
}
