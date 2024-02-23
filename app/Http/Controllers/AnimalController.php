<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Animal;


class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animals = Animal::query()
            ->orderBy('name', 'asc')
            ->paginate(10);

        return view(
            'animals.animals',
            compact(
                'animals'
            )
        );
    }
}
