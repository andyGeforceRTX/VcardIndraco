<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee VCard</title>
</head>
<body>
    <h1>Create Employee VCard</h1>
    <a href="{{ route('vcards.index') }}">View All VCards</a>

    

    @if (session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" required>
        </div>

        <div>
            <label for="photo">Photo:</label>
            <input type="file" name="photo" accept="image/*" required>
        </div>

        <div>
            <label for="position">Position:</label>
            <input type="text" name="position" required>
        </div>

        <div>
            <label for="phone">Phone:</label>
            <input type="text" name="phone" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
        </div>

        <div>
            <label for="vcf_file">VCF File:</label>
            <input type="file" name="vcf_file" accept=".vcf" required>
        </div>

        <button type="submit">Create VCard</button>
        
    </form>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        div {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="file"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 15px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</body>
</html>
