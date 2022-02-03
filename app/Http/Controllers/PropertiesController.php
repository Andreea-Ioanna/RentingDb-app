<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Properties;

class PropertiesController extends Controller
{
    public function getProperties()
    {
        $properties = Properties::all();
        return view('welcome')->with('properties', $properties);
    }
}
