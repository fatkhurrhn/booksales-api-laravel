<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Penulis</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 40px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }

        th, td {
            padding: 16px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            vertical-align: top;
        }

        th {
            background-color: #f0f0f0;
            color: #333;
        }

        img {
            width: 100px;
            height: auto;
            border-radius: 8px;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>

    <h1>📚 Daftar Penulis</h1>

    <table>
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nama</th>
                <th>Biografi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td><img src="{{ $author['photo'] }}" alt="Foto {{ $author['name'] }}"></td>
                    <td>{{ $author['name'] }}</td>
                    <td>{{ $author['bio'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
