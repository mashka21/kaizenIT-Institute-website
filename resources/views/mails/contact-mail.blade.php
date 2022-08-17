<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Information</title>
</head>
<body>
        <h2>Hello Admin,</h2><br>
        You received an email from : {{ $contact->name }}<br>
        Here are the details:<br>
        <b>Name:</b> {{ $contact->name }}<br>
        <b>Email:</b> {{ $contact->email }}<br>
        <b>Phone:</b> {{ $contact->phone }}<br>
        <b>Message:</b> {{ $contact->comment }}<br>
</body>
</html>