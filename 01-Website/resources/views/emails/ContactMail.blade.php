<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contact Message </h1>
    <p>Naam : {{$details['userName']}} </p>
    <p>Email : {{$details['userEmail']}} </p>
    <p>Onderwerp : {{$details['userSubject']}} </p>
    <p>Opmerking : {{$details['userMessage']}} </p>
</body>
</html>