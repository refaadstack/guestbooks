<html>
<head>
    <title>Guestbook</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            text-align: center;
            background-color: white;
            margin: 0;
            padding: 0;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
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
        }
        .names {
            font-family: 'Great Vibes', cursive;
            font-size: 48px;
            margin: 20px 0;
        }
        .role-selection {
            margin-top: 20px;
        }
        .role-selection h2 {
            font-size: 24px;
            font-weight: bold;
        }
        .role-selection button {
            font-size: 18px;
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            background-color: #e0e0e0;
            cursor: pointer;
        }
        .role-selection button:hover {
            background-color: #d0d0d0;
        }
    </style>
</head>
<body>
    <div class="header">
        <i class="fas fa-home"></i>
        <div class="title">GUESTBOOK</div>
        <i class="fas fa-user"></i>
    </div>
    <div class="welcome">Welcome!</div>
    <div class="names">
        Dhani<br>&<br>Rose
    </div>
    <div class="role-selection">
        <h2>Choose Your Role!</h2>
        <button> <a href="{{ route('front.login-guest') }}">Guest</a>
        
        <button> <a href="{{ route('front.login-Admin') }}"> Admin</a>
    </div>
</body>
</html> 
