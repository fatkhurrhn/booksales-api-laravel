<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 280px;
            padding: 20px;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h2 {
            margin-top: 0;
            font-size: 1.4em;
            color: #333;
        }

        .card p {
            margin: 8px 0;
            color: #555;
        }

        .price {
            font-weight: bold;
            color: #2196F3;
        }
    </style>
</head>
<body>
    <h1>📚 Daftar Buku</h1>

    <div class="container">
        @foreach ($books as $item)
            <div class="card">
                <h2>{{ $item['title'] }}</h2>
                <p>{{ $item['description'] }}</p>
                <p class="price">Rp {{ number_format($item['price'], 0, ',', '.') }}</p>
                <p><strong>Stok:</strong> {{ $item['stock'] }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>
