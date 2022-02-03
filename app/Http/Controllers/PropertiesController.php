<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Properties;
use Illuminate\Support\Facades\Auth;

class PropertiesController extends Controller
{
    public function getProperties()
    {
        $properties = Properties::all();
        return view('welcome')->with('properties', $properties);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function createProperty(Request $request)
    {
        //add property
        $property = Properties::create([
            'userId' => Auth::user()->id,
            'description' => $request->description,
            'price' => $request->price,
            'address' => $request->address,
            'area' => $request->area,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'address' => $request->address,
            'rooms' => $request->rooms,
            'address' => $request->address,
            'active' => true,
            'deposit' => $request->deposit,
            'utilities' => $request->utilities,
            'period' => $request->period,
            'type' => $request->type,
        ]);
        return redirect()->action([PropertiesController::class, 'myProperties']);

    }

    public function myProperties()
    {
        //list only properties of the authenticated user.
        $properties = Properties::where('userId',Auth::user()->id)->get();
        return view('landlord.my-properties')->with('properties', $properties);
    }

    public function viewProperty($id){
        //view property as Guest (auth not needed)
        return view('property', [
            'property' => Properties::findOrFail($id)
        ]);
    }

    public function editProperty($id)
    {
        //edit property (only auth users), also only the property that belongs to the auth user.
        $property = Properties::where('userId',Auth::user()->id)->where('id',$id)->first();
            return view('landlord.edit-property', [
                'property' => $property
            ]);
    }

    public function updateProperty(Request $request, Properties $property)
    {
        //update property
        $property->update($request->all());
        return redirect()->action([PropertiesController::class, 'myProperties']);

    }

    public function allProperties(){
        //properties from welcome
        return view('welcome', [
            'properties' => Properties::where('active',1)->get()
        ]);
    }
}
