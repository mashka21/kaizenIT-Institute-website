<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Some One Applied service</title>
</head>
<body>
        <h2>Hello Admin,</h2><br>
        You received an email from : {{ $services->name }}<br>
        Here are the details:<br>
        <b>Name:</b> {{ $services->name }}<br>
        <b>Email:</b> {{ $services->email }}<br>
        <b>Phone:</b> {{ $services->phone }}<br>
        <b>Service Type:</b> {{ $services->selected_service }}<br>
</body>
</html>