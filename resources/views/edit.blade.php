@include('components.boilerplate')


<h2>EDIT{{$animal_request->id}}</h2>


        <h3>
        @if (Session::has('success_message'))
        <div>
            {{ Session::get('success_message') }}
        </div>
        @endif
            @if (count($errors) > 0)
        <div>
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
    @endif
       </h3>

       
        <form action="{{ route('update', ['id' => $animal_request->id]) }}" method="post">
           @method('PUT')
           @csrf
       
           

    <label for="animalName">Animal Name:</label>
    <input type="text" name="name" id="animalName" value="{{old('name', $animal_request->name)}}">

    <label for="ownerFirstName">Owner Name:</label>
    <input type="text" name="first_name" id="ownerFirstName" value="{{$animal_request->owner_id ? $animal_request->owner_id : old('first_name')}}">

    <label for="surname">Owner Surname:</label>
    <input type="text" name="surname" id="surname" value="{{$animal_request->surname ? $animal_request->surname : old('surname')}}">

    <label for="species">Animal Species:</label>
    <input type="text" name="species" id="species" value="{{$animal_request->species ? $animal_request->species : old('species')}}">

    <label for="breed">Animal Breed:</label>
    <input type="text" name="breed" id="breed" value="{{$animal_request->breed ? $animal_request->breed : old('breed')}}">

    <label for="age">Animal Age:</label>
    <input type="number" name="age" id="age" value="{{$animal_request->age ? $animal_request->age : old('age')}}">

    <label for="weight">Animal Weight:</label>
    <input type="number" name="weight" id="weight" value="{{$animal_request->weight ? $animal_request->weight : old('weight')}}">

    <label for="path">Animal File Name:</label>
    <input type="text" name="path" id="path" value="{{$animal_request->path ? $animal_request->path : old('path')}}">

    <button>Submit</button>

</form>