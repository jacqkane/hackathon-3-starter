<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalDetailsController extends Controller
{
    public function show($id)
    {
        $animal = Animal::find($id);
        return view('details', compact('animal'));
        
    }
}
