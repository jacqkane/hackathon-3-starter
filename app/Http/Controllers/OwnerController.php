<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class OwnerController extends Controller
{
    public function index()
    {
        $animals = Animal::query();
    }
}
