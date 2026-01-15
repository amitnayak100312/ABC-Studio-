<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test WhatsApp</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; padding-top: 50px; background: #f4f7f6; }
        form { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); width: 350px; }
        input, textarea { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;}
        button { width: 100%; padding: 10px; background: #25D366; color: white; border: none; border-radius: 4px; cursor: pointer; font-weight: bold; font-size: 16px; }
        button:hover { background: #128C7E; }
        .alert { padding: 10px; background: #d4edda; color: #155724; border-radius: 4px; margin-bottom: 15px; text-align: center; }
    </style>
</head>
<body>

    <form action="{{ route('send.whatsapp') }}" method="POST">
        <h2 style="text-align: center; color: #075e54;">WhatsApp Test</h2>

        @if(session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert" style="background: #f8d7da; color: #721c24;">{{ session('error') }}</div>
        @endif

        @csrf
        
        <label><b>Recipient Number:</b></label>
        <input type="text" name="phone" placeholder="+1234567890" required>
        
        <label><b>Message:</b></label>
        <textarea name="message" rows="4" placeholder="Hello from Laravel!" required></textarea>

        <button type="submit">Send Message</button>
    </form>

</body>
</html>
