<html>
<head>
    <title>Guestbook</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }
        .header .icon {
            font-size: 24px;
        }
        .header .title {
            font-weight: 700;
            font-size: 24px;
        }
        .content {
            margin-top: 100px;
        }
        .content h1 {
            font-size: 48px;
            font-weight: 700;
            margin: 0;
        }
        .content p {
            font-size: 18px;
            margin: 20px 0;
        }
        .signature {
            font-family: 'Great Vibes', cursive;
            font-size: 36px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="{{ route('front.index') }}"><i class="fas fa-home"></i></a>
        <div class="title">GUESTBOOK</div>
        <a href="{{ route('front.dashboard') }}"><i class="fas fa-user"></i></a>
    </div>
    <div class="content">
        <h1>Thank you!</h1>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        <p>Enjoy the event and help the bride and groom create the best day of their lives here!</p>
        <div class="signature">Dhani & Rose</div>
    </div>
</body>
</html>