<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use App\Models\SearchResult;

class SearchController extends Controller
{
public function search(Request $request)
{
    $query = $request->input('query');
    $results = Animal::where('name', 'LIKE', "%$query%")
        ->orWhereHas('owner', function ($ownerQuery) use ($query) {
            $ownerQuery->where('first_name', 'LIKE', "%$query%")
                       ->orWhere('surname', 'LIKE', "%$query%");
        })
        ->with('image')
        ->with('owner')
        ->get();

    return view('search', compact('results'));
}

}