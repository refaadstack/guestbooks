<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Message - Guestbook</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            color: #000000;
            margin: 0;
            padding: 0;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            min-height: 150px;
            margin-bottom: 10px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: white;
            margin-left: 10px;
        }

        .attachment-preview {
            margin-top: 20px;
        }

        .attachment-preview img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="header">
        <i class="fas fa-edit"></i>
        <div class="title">Edit Message</div>
        <a href="{{ route('front.dashboard') }}" class="fas fa-times"></a>
    </div>

    <div class="container">
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('guest.update-pesan', $pesan->id_pesan) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="message">Message</label>
                <textarea 
                    name="message" 
                    id="message" 
                    rows="6">{{ old('message', $pesan->isi) }}</textarea>
                @error('message')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        
            @if($pesan->lampiran)
                <div class="attachment-preview">
                    <label>Current Attachment</label>
                    <img src="{{ Storage::url($pesan->lampiran) }}" alt="Message attachment">
                </div>
            @endif
        
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Update Message</button>
                <a href="{{ route('front.dashboard') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
</html>