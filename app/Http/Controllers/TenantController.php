<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;
use phpDocumentor\Reflection\DocBlock\Tags\Property;

class TenantController extends Controller
{
    public function viewForm($id){
        return view('tenant',[
            'propertyId' => $id
        ]);
    }

    public function createForm(Request $request,$propertyId)
    {
        //add property
        $property = Tenant::create([
            ##exact, vezi ca aici ai nevoie de property id. 
            ## era mai usor sa ai form in property. Asa trebuie
            ## sa trimiti propertyId din property in tenant
            ## se putea face cu modal
            'propertyId' => $propertyId,
            'firstName' => $request->firstName
        ]);
        return redirect()->route('property', ['id' => $propertyId]);
    }
}
