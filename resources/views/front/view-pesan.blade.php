<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            color: #000000;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
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
            background-color: #ffffff;
            border: 2px solid #000000;
            border-radius: 10px;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="header">
        <i class="fas fa-home"></i>
        <span>GUESTBOOK</span>
        <i class="fas fa-user"></i>
    </div>
    <div class="container">
        <h1>Message!</h1>
            @foreach ($pesan as $pesan)    
                <label for="name">guest</label>
                <input type="text" id="name" name="name" value="{{ $pesan->guest->nama }}">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5">{{ $pesan->isi }}</textarea>
                <div class="attachment">
                    <img src="{{ Storage::url($pesan->lampiran) }}" alt="" style="height: 100%; width:100vw"></div>

                    <a href="{{ route('balasan.create', $pesan) }}" 
                    class="reply-button"
                    onclick="return confirm('Apakah Anda yakin ingin membalas pesan ini?')">Reply</a>
            @endforeach

    </div>
</body>
</html>
