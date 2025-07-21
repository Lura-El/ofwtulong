<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('contact.submit') }}" method="POST" >
        @csrf
        <label for="name"></label>
        <input type="text" name="name" placeholder="Name" id="name"> <br>
        <label for="email"></label>
        <input type="email" name="email" placeholder="Email" required>
        <label for="phone"></label>
        <input type="tel" name="phone" placeholder="Phone" required> <br>

        <label for="message"></label>
        <textarea name="message" placeholder="Message" id="message-area" required></textarea><br>
    
        <button type="submit" id="send-mes-btn">Send Message</button>
    </form>
</body>
</html>