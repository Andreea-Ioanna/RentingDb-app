<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class SignupController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function signup()
    {
        return view('signup', ['name' => 'Signup']);
    }

}