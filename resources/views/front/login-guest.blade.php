<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook - Dhani & Rose</title>
    
    <!-- External CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        /* Reset & Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #ffffff;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Container Styles */
        .container {
            width: 100%;
            max-width: 500px;
            padding: 20px;
            text-align: center;
        }

        /* Header Styles */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            margin-bottom: 30px;
        }

        .header i {
            font-size: 24px;
            color: #333;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .header i:hover {
            color: #666;
        }

        .header .title {
            font-size: 28px;
            font-weight: 700;
            letter-spacing: 2px;
            color: #333;
        }

        /* Names Section */
        .names {
            font-family: 'Great Vibes', cursive;
            font-size: 48px;
            margin: 40px 0;
            color: #333;
            line-height: 1.4;
        }

        /* Login Box Styles */
        .login-box {
            background-color: #f8f8f8;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .login-box h2 {
            font-size: 24px;
            margin-bottom: 25px;
            color: #333;
            text-align: center;
        }

        .login-box input {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 20px;
            border: 2px solid #eee;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .login-box input:focus {
            outline: none;
            border-color: #666;
        }

        .login-box button {
            width: 100%;
            padding: 12px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-box button:hover {
            background-color: #444;
        }

        /* Alert Styles */
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 8px;
            text-align: center;
        }

        .alert-danger {
            background-color: #ffe6e6;
            color: #cc0000;
            border: 1px solid #ffcccc;
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .container {
                padding: 15px;
            }

            .login-box {
                padding: 30px 20px;
            }

            .names {
                font-size: 36px;
            }

            .header .title {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <i class="fas fa-home" title="Home"></i>
            <div class="title">GUESTBOOK</div>
            <i class="fas fa-user" title="User"></i>
        </div>

        <div class="names">
            Dhani<br>&amp;<br>Rose
        </div>

        <div class="login-box">
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('front.guestLogin') }}" method="POST">
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
                    name="kode_guest" 
                    type="text" 
                    placeholder="Guest/Admin Code" 
                    required 
                    value="{{ old('kode_guest') }}"
                >
                <button type="submit">Log In</button>
            </form>
        </div>
    </div>
</body>
</html>