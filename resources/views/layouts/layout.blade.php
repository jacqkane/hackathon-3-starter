
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        nav {
            margin-top: 5%;
            background-color: #333;
            color: white;
            text-align: center;
            padding: 3rem;
            width: 100%;
            box-sizing: border-box;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 3rem;
            padding: 5rem;
        }

        nav a:hover {
            text-decoration: underline;
        }

        img {
            max-width: 80px; 
            border-radius: 5px;
        }

        table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr {
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 10px;
    }
    </style>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/search') }}">Search</a>
        <a href="{{ url('/edit') }}">Edit</a>
        <a href="{{ url('/create-visit') }}">Create</a>
    </nav>

    @yield('content')
</body>
</html>
