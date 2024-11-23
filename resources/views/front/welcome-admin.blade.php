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
        h1 {
            font-size: 48px;
            font-weight: bold;
            margin: 20px 0;
        }
        label {
            display: block;
            text-align: left;
            margin: 10px 0 5px;
            font-size: 18px;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f0f2f1;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
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
        .attachment {
            width: 100%;
            height: 150px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f0f2f1;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
            font-size: 18px;
            color: #888888;
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
    <div class="container">

        <div class="welcome">Welcome, Admin!</div>
        
        @foreach ($pesan as $item)
        <label for="name">guest</label>
        <input type="text" id="name" name="name" value="{{ $item->guest->nama }}">
        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5">{{ $item->isi }}</textarea>
        <div class="attachment">
            <img src="{{ Storage::url($item->lampiran) }}" alt="" style="height: 100%; width:100vw"></div>
            
            <a href="{{ route('balasan.create', $item) }}" 
            class="reply-button"
            onclick="return confirm('Apakah Anda yakin ingin membalas pesan ini?')">Reply</a>
            @endforeach
        </div>
        </body>
</html>
