@include('components.boilerplate')


<h2>CREATE</h2>


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

            <form action="{{ route('store') }}" method="post">
            @csrf
           
    

    <label for="animalName">Animal Name:</label>
    <input type="text" name="name" id="animalName" value="{{old('name')}}">

    <label for="ownerFirstName">Owner Name:</label>
    <input type="text" name="first_name" id="ownerFirstName" value="{{old('first_name')}}">

    <label for="surname">Owner Surname:</label>
    <input type="text" name="surname" id="surname" value="{{old('surname')}}">

    <label for="species">Animal Species:</label>
    <input type="text" name="species" id="species" value="{{old('species')}}">

    <label for="breed">Animal Breed:</label>
    <input type="text" name="breed" id="breed" value="{{old('breed')}}">

    <label for="age">Animal Age:</label>
    <input type="number" name="age" id="age" value="{{old('age')}}">

    <label for="weight">Animal Weight:</label>
    <input type="number" name="weight" id="weight" value="{{old('weight')}}">

    <label for="path">Animal File Name:</label>
    <input type="text" name="path" id="path" value="{{old('path')}}">

    <button>Submit</button>

</form>