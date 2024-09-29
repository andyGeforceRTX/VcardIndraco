<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VCard List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f9f9f9;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
        }

        td img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
        }

        .success {
            color: green;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>VCard List</h1>

        @if (session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Photo</th>
                    <th>Position</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>VCF File</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vcards as $vcard)
                    <tr>
                        <td>{{ $vcard->name }}</td>
                        <td>
                            @if ($vcard->photo)
                                <img src="{{ asset('photos/' . $vcard->photo) }}" alt="Photo">
                            @else
                                No Photo
                            @endif
                        </td>
                        <td>{{ $vcard->position }}</td>
                        <td>{{ $vcard->phone }}</td>
                        <td>{{ $vcard->email }}</td>
                        <td>
                            @if ($vcard->vcf_file)
                                <a href="{{ asset('vcf_files/' . $vcard->vcf_file) }}" download>Download VCF</a>
                            @else
                                Belum ada VCF File
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>