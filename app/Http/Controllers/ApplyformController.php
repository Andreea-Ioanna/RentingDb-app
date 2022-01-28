<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ApplyformController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function applyform()
    {
        return view('applyform', ['name' => 'Apply form']);
    }

}