<?php

namespace App\Http\Controllers;
//use App\Models\Property;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
     /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function addProperty(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        $user = Property::create([
            //add columns
            'name' => $request->name,
            'email' => $request->email,
        ]);


        return redirect(RouteServiceProvider::HOME);
    }
}
