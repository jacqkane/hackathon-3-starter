<!-- resources/views/search.blade.php -->
@extends('layouts.layout')

@section('title', 'Search')

@section('styles')
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        text-align: center;
    }

    nav {
        margin-top: 5px;
        background-color: #333;
        color: white;
        text-align: center;
        padding: 1rem;
        width: 100%;
        box-sizing: border-box;
    }

    nav a {
        color: white;
        text-decoration: none;
        margin: 0 10px;
        font-size: 1rem;
    }

    nav a:hover {
        text-decoration: underline;
    }

    h1 {
        margin-top: 20px;
    }

    form {
        margin-top: 10px;
    }

    button {
        padding: 5px 10px;
    }

    h2 {
        margin-top: 20px;
    }

    .result-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    img {
        max-width: 80px;
        border-radius: 5px;
    }
</style>
@endsection

@section('content')
    <h1>Search Animals</h1>

    <form action="{{ url('/search') }}" method="get">
        <input type="text" name="query" placeholder="Type to search..." value="{{ request('query') }}">
        <button type="submit">Search</button>
    </form>

    @if(isset($results))
        <h2>Search Results:</h2>
        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Owner</th>
                </tr>
            </thead>
            <tbody>
                @foreach($results as $result)
                    <tr>
                        <td><img src="images/pets/{{ $result->image->path }}" alt="{{ $result->name }}"></td>
                        <td>{{ $result->name }}</td>
                        <td>{{ $result->owner->first_name }} {{ $result->owner->surname }}</td>
                        <td><a href="{{ url('details/'.$result->id) }}" class="details-button">Details</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
