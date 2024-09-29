<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create VCard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
      background-image: linear-gradient(to bottom, #f2f2f2, #fff);
      background-repeat: no-repeat;
      height: 100vh;
      margin: 0;
    }

    .container {
      max-width: 500px;
      margin: 40px auto;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ddd;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    input[type="text"], input[type="email"], input[type="file"] {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button[type="submit"]:hover {
      background-color: #3e8e41;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-center">Mongga Damel VCard</h2>
        <form action="/store" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="position">Position:</label>
            <input type="text" name="position" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" name="phone" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="photo">Photo:</label>
            <input type="file" name="photo" accept="image/*" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary">Create VCard</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>