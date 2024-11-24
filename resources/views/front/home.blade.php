<!DOCTYPE html>
<html>
<head>
    <title>Guestbook</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #BED7DC;
            margin: 0;
            padding: 0;
            color: #000000;
        }
        .container {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start; /* Nama di kiri, role di kanan */
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            color: #C8A1E0;
        }
        .header i {
            font-size: 24px;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
        }
        .welcome {
            font-size: 48px;
            font-weight: bold;
            margin-top: 50px;
            color: #E5DDC5;
        }
        .names {
            font-family: 'Great Vibes', cursive;
            font-size: 48px;
            margin: 20px 0;
            text-align: left; /* Nama tetap rata kiri */
            color: #674188;

        }
        .role-selection {
            margin-top: 20px;
            display: flex;
            flex-direction: column; /* Role dibuat vertikal */
            align-items: center;
        }
        .role-selection h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .role-selection button {
            font-size: 18px;
            padding: 10px 20px;
            margin: 10px 0; /* Jarak antar tombol */
            border: none;
            border-radius: 5px;
            background-color:#E2BFD9;
            cursor: pointer;
            width: 200px; /* Ukuran tombol konsisten */
            text-align: center;
        }
        .role-selection button a {
            text-decoration: none;
            color: #000;
            display: block; /* Area tautan mencakup seluruh tombol */
        }
        .role-selection button:hover {
            background-color: #d8a2ca;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="{{ route('front.index') }}"><i class="fas fa-home"></i></a>
        <div class="title">GUESTBOOK</div>
        <!-- Menu Dashboard Dinamis -->
        <a href="{{ session('id_admin') ? route('admin.dashboard') : route('front.dashboard') }}">
            <i class="fas fa-user"></i>
        </a>
    </div>
    <div class="welcome">Welcome!</div>
    <div class="container">
        <div class="names">
            Dhani<br>&<br>Rose
        </div>
        <div class="role-selection">
            <h2>Choose Your Role!</h2>
            <button>
                <a href="{{ route('front.login-guest') }}">Guest</a>
            </button>
            <button>
                <a href="{{ route('front.login-Admin') }}">Admin</a>
            </button>
        </div>
    </div>
</body>
</html>
