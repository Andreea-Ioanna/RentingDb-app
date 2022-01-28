<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class LoginController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function login()
    {
        return view('login', ['name' => 'Login']);
    }

}