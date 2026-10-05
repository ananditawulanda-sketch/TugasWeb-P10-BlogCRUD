<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Blog Laravel')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f5f5f5;
        }

        nav {
            background-color: #333;
            padding: 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }

        .container {
            width: 80%;
            margin: 30px auto;
        }

        .card {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        .btn {
            display: inline-block;
            padding: 8px 15px;
            background-color: #333;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <nav>
        <a href="{{ route('posts.index') }}">Blog</a>
        <a href="{{ route('posts.create') }}">Tambah Post</a>
    </nav>

    <div class="container">

        @yield('content')

    </div>

</body>
</html>