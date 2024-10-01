<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create VCard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
      background-image: linear-gradient(to bottom, #ffafbd, #ffc3a0); /* Warna yang mencolok dan lembut */
      background-repeat: no-repeat;
      height: 100vh;
      margin: 0;
      overflow: hidden;
      position: relative; /* Posisi relatif untuk menempatkan elemen animasi */
    }

    .container {
      max-width: 500px;
      margin: 40px auto;
      padding: 30px;
      background-color: rgba(255, 255, 255, 0.9); /* Latar belakang sedikit transparan */
      border-radius: 10px;
      border: 1px solid #ddd;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      animation: fadeIn 1s ease-in-out;
      position: relative; /* Posisi relatif untuk elemen di dalamnya */
      z-index: 2; /* Pastikan kontainer di atas animasi */
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 10px;
      color: #333;
      font-weight: bold;
    }

    input[type="text"], input[type="email"], input[type="file"] {
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 5px;
      width: 100%;
      transition: all 0.3s ease-in-out;
    }

    input[type="text"]:focus, input[type="email"]:focus, input[type="file"]:focus {
      border-color: #ff6f61; /* Warna aksen cerah */
      box-shadow: 0 0 10px #ff6f61;
    }

    button[type="submit"] {
      background-color: #ff6f61; /* Warna mencolok untuk tombol */
      color: #fff;
      padding: 12px 20px;
      border: none;
      border-radius: 30px;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
      font-size: 18px;
      display: block;
      width: 100%;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    button[type="submit"]:hover {
      background-color: #ff3f41; /* Warna lebih gelap saat hover */
    }

    h2 {
      text-align: center;
      color: #ff6f61;
      margin-bottom: 20px;
      font-family: 'Poppins', sans-serif;
      font-size: 26px;
      font-weight: bold;
      animation: slideDown 1s ease-in-out;
    }

    /* Animasi Fade-in untuk Form */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Animasi Slide Down untuk Heading */
    @keyframes slideDown {
      from {
        opacity: 0;
        transform: translateY(-50px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Cangkir kopi dan asap animasi */
    .coffee-cup {
      position: absolute;
      bottom: 0; /* Atur agar cangkir berada di bawah */
      z-index: 1; /* Pastikan di belakang form */
      opacity: 0.7; /* Transparansi agar tidak mengganggu teks */
    }

    .cup {
      position: relative;
      width: 180px; /* Ukuran cangkir */
      height: 100px; /* Tinggi cangkir */
      background-color: #fff; /* Warna cangkir putih */
      border: 5px solid #ff6f61;
      border-radius: 0 0 50px 50px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      overflow: hidden;
      margin: 0 auto;
    }

    .handle {
      position: absolute;
      top: 5px; /* Atur posisi pegangan */
      right: -20px;
      width: 20px;
      height: 30px;
      border: 5px solid #ff6f61;
      border-radius: 50%;
    }

    .coffee {
      position: absolute;
      bottom: 0; /* Ubah posisi kopi */
      left: 0;
      width: 100%; /* Lebar kopi sesuai cangkir */
      height: 50%; /* Tinggi kopi */
      background-color: #4b3c3c; /* Warna kopi hitam */
      border-radius: 0 0 50px 50px; /* Sesuaikan bentuk dengan cangkir */
    }

    .steam {
      position: absolute;
      top: -30px; /* Atur posisi uap */
      left: 50%;
      width: 15px;
      height: 70px;
      margin-left: -7.5px;
      background-image: linear-gradient(to top, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.8));
      border-radius: 50%;
      animation: riseUp 4s infinite;
    }

    .steam:nth-child(2) {
      left: 30%;
      animation-delay: 0.5s;
    }

    .steam:nth-child(3) {
      left: 70%;
      animation-delay: 1s;
    }

    @keyframes riseUp {
      0% {
        transform: translateY(50px);
        opacity: 0;
      }
      50% {
        opacity: 0.5;
      }
      100% {
        transform: translateY(-100px);
        opacity: 0;
      }
    }

    /* Mengulang cangkir kopi di latar belakang */
    .cup-container {
      position: absolute;
      bottom: -20px; /* Menempatkan di bawah */
      left: 10%; /* Jarak dari kiri */
      z-index: 0; /* Di belakang kontainer */
      pointer-events: none; /* Tidak mengganggu interaksi */
    }

    /* Mengatur posisi dan jumlah cangkir kopi */
    .cup-container .cup {
      margin-right: 10px; /* Jarak antar cangkir */
      animation: sway 5s ease-in-out infinite; /* Animasi goyang */
    }

    @keyframes sway {
      0%, 100% {
        transform: translateX(0);
      }
      50% {
        transform: translateX(5px);
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Mongga Damel VCard</h2>
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

  <!-- Animasi cangkir kopi di bagian samping -->
  <div class="cup-container">
    <div class="cup">
      <div class="handle"></div>
      <div class="coffee"></div>
      <div class="steam"></div>
      <div class="steam"></div>
      <div class="steam"></div>
    </div>
    <div class="cup">
      <div class="handle"></div>
      <div class="coffee"></div>
      <div class="steam"></div>

      
      <
