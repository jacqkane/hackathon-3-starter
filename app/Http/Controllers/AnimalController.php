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
        $animal = Animal::query()
            ->orderBy('name', 'asc');
        // ->paginate(10);

        return view(
            'create',
            compact(
                'animal'
            )
        );
    }

    public function edit($id)
    {
        $animal_request = Animal::findOrFail($id);

        return view('edit', compact('animal_request'));
    }

    public function update(Request $request, $id)
    {
        $animal_update = Animal::findOrFail($id);

        $this->validate($request, [
            'name' => 'required',
            'first_name' => 'required',
            'surname' => 'required',
            'species' => 'required',
            'breed' => 'required',
            'age' => 'required',
            'weight' => 'required',
            'path' => 'required',
        ], [
            'name.required' => 'Pet name is mandatory',
            'first_name.required' => 'First name is mandatory',
            'surname.required' => 'Last name is mandatory',
            'species.required' => 'Species is mandatory',
            'breed.required' => 'Breed is mandatory',
            'age.required' => 'Pet age is mandatory',
            'weight.required' => 'Pet weight is mandatory',
            'path.required' => 'Name of the file is mandatory',
        ]);
        $data = $request->all();
        $animal_update->name = $data['name'];
        $animal_update->first_name = $data['first_name'];
        $animal_update->surname = $data['surname'];
        $animal_update->species = $data['species'];
        $animal_update->breed = $data['breed'];
        $animal_update->age = $data['age'];
        $animal_update->weight = $data['weight'];
        $animal_update->path = $data['path'];
        $animal_update->save();
        session()->flash('success_message', 'Your pet info has been updated!');
        return redirect()->route('edit');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'first_name' => 'required',
            'surname' => 'required',
            'species' => 'required',
            'breed' => 'required',
            'age' => 'required',
            'weight' => 'required',
            'path' => 'required',
        ], [
            'name.required' => 'Pet name is mandatory',
            'first_name.required' => 'First name is mandatory',
            'surname.required' => 'Last name is mandatory',
            'species.required' => 'Species is mandatory',
            'breed.required' => 'Breed is mandatory',
            'age.required' => 'Pet age is mandatory',
            'weight.required' => 'Pet weight is mandatory',
            'path.required' => 'Name of the file is mandatory',
        ]);
        $data = $request->all();
        $new_animal = new Animal;
        $new_animal->name = $data['name'];
        $new_animal->first_name = $data['first_name'];
        $new_animal->surname = $data['surname'];
        $new_animal->species = $data['species'];
        $new_animal->breed = $data['breed'];
        $new_animal->age = $data['age'];
        $new_animal->weight = $data['weight'];
        $new_animal->path = $data['path'];
        $new_animal->save();
        session()->flash('success_message', 'Your pet has been added!');
        return redirect()->back();
    }
}
