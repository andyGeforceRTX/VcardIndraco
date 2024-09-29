<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $vcard->name }} - Digital Business Card</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .card {
            width: 350px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .header img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #fff;
        }

        .header h1 {
            font-size: 24px;
            margin: 10px 0;
            font-weight: bold;
        }

        .content {
            padding: 20px;
        }

        .content p {
            margin-bottom: 10px;
            font-size: 16px;
        }

        .content p span {
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="header">
            <img src="{{ asset('photos/'.$vcard->photo) }}" alt="Photo of {{ $vcard->name }}">
            <h1>{{ $vcard->name }}</h1>
        </div>
        <div class="content">
            <p><span>Position:</span> {{ $vcard->position }}</p>
            <p><span>Phone:</span> {{ $vcard->phone }}</p>
            <p><span>Email:</span> {{ $vcard->email }}</p>
            {{-- Add other details here similarly --}}
        </div>
    </div>

</body>
</html>