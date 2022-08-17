<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Admission</title>
</head>
<body>
        <h2>Hello Admin,</h2><br>
        You received an email from : {{ $admission->name }}<br>
        Here are the details:<br>
        <b>Name:</b> {{ $admission->name }}<br>
        <b>Email:</b> {{ $admission->email }}<br>
        <b>Phone:</b> {{ $admission->phone }}<br>
        <b>Course:</b> {{ $admission->selected_course }}<br>
</body>
</html>