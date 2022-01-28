<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function dashboard()
    {
        return view('dashboard', ['name' => 'Dashboard']);
    }

}