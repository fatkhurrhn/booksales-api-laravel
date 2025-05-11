<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Genre</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f2f2f2;
            padding: 40px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: flex-start;
        }

        .card {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.07);
            padding: 20px;
            width: 280px;
            transition: 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h2 {
            margin: 0 0 10px;
            font-size: 1.3em;
            color: #2c3e50;
        }

        .card p {
            color: #555;
            line-height: 1.4em;
        }
    </style>
</head>
<body>

    <h1>📚 Daftar Genre Buku</h1>

    <div class="container">
        @foreach ($genres as $genre)
            <div class="card">
                <h2>{{ $genre['name'] }}</h2>
                <p>{{ $genre['description'] }}</p>
            </div>
        @endforeach
    </div>

</body>
</html>
