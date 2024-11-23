<html>
<head>
    <title>Guestbook</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border-bottom: 1px solid #ddd;
        }
        .header i {
            font-size: 24px;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
        }
        .welcome {
            font-size: 36px;
            font-weight: bold;
            margin: 20px 0;
        }
        .message-box {
            background-color: #e0e0e0;
            border-radius: 10px;
            padding: 20px;
            margin: 20px auto;
            width: 80%;
            max-width: 600px;
            text-align: left;
        }
        .message-box label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .message-box input[type="text"],
        .message-box textarea {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            background-color: #f0f0f0;
        }
        .message-box textarea {
            height: 100px;
        }
        .reply-button {
            background-color: #b0b0b0;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="header">
        <i class="fas fa-home"></i>
        <div class="title">GUESTBOOK</div>
        <i class="fas fa-user"></i>
    </div>
    <div class="welcome">Welcome, Admin!</div>

    @foreach ($pesan as $item)
        <div class="message-box">
            <label for="name1">Name:</label>
            <input type="text" id="name1" placeholder=" " value="{{ $item->guest->nama }}">
            <label for="message1">Message:</label>
            <textarea id="message1" placeholder=" ">{{ $item->isi }}</textarea>
            <button class="reply-button"> <a href="balasan.php">Reply</a>
        </div>
    @endforeach
</body>
</html>
