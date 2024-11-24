<html>
<head>
    <title>Guestbook</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }
        .header i {
            font-size: 24px;
        }
        .header .title {
            font-size: 24px;
            font-weight: 700;
        }
        .names {
            font-family: 'Great Vibes', cursive;
            font-size: 48px;
            margin: 20px 0;
        }
        .login-box {
            background-color: #f0f0f0;
            padding: 40px;
            border-radius: 10px;
            display: inline-block;
            text-align: left;
        }
        .login-box h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .login-box input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .login-box button {
            width: 100%;
            padding: 10px;
            background-color: #ccc;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="{{ route('front.index') }}"><i class="fas fa-home"></i></a>
            <div class="title">GUESTBOOK</div>
            <!-- Menu Dashboard Dinamis -->
            <a href="{{ session('id_admin') ? route('admin.dashboard') : route('front.dashboard') }}">
                <i class="fas fa-user"></i>
            </a>
        </div>
        <div class="names">
            Dhani<br>&<br>Rose
        </div>
        <div class="login-box">
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('front.adminLogin') }}" method="POST">
                @csrf
                <h2>Log In</h2>
                <input 
                    name="nama" 
                    type="text" 
                    placeholder="Your Name" 
                    required 
                    value="{{ old('nama') }}"
                >
                <input 
                    name="id_admin" 
                    type="text" 
                    placeholder="Guest/Admin Code" 
                    required 
                    value="{{ old('id_admin') }}"
                >
                <button type="submit">Log In</button>
            </form>
        </div>
    </div>
</body>
</html>