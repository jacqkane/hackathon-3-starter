<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pet details</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        div {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
        }

        h3 {
            color: #2c3e50;
            margin-bottom: 5px;
        }

        p {
            color: #34495e;
            margin-top: 5px;
        }

        a {
            background-color: #3498db; 
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/search') }}">Search</a>
        <a href="{{ url('create') }}">Create</a>
    </nav>
    <div>
        <h3>Pet's Name:</h3>
        <p>{{ $animal->name }}</p>
        <h3>ID:</h3>
        <p>{{ $animal->id }}</p>
        <h3>Species:</h3>
        <p>{{ $animal->species }}</p>
        <h3>Breed:</h3>
        <p>{{ $animal->breed }}</p>
        <h3>Age:</h3>
        <p>{{ $animal->age }}</p>
        <h3>Weight:</h3>
        <p>{{ $animal->weight }}</p>
        <h3>First Visit:</h3>
        <p>{{ $animal->created_at }}</p>
        <h3>Last Visit:</h3>
        <p>{{ $animal->updated_at }}</p>
        <h3>owner: </h3>
        <p>{{ $animal->owner->first_name }} {{ $animal->owner->surname }}</p>
        <a href="{{ url('/edit', ['id' => $animal->id]) }}">Edit</a>
    </div>
</body>
</html>
