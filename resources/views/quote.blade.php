<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Quote</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px;
            width: 250px;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        h2 {
            margin-top: 0;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        p {
            text-align: justify;
        }
    </style>
</head>

<body>
    <h1>Quote From Api</h1>
    <div class="container">
        @foreach ($quoteData as $quote)
            <div class="card">
                <h2>{{ $quote['author'] }}</h2>
                <p>{{ $quote['en'] }}</p>
                <p><b>Rating: {{ $quote['rating'] }}</b></p>
            </div>
        @endforeach
    </div>
</body>

</html>
