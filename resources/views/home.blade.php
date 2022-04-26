<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booltrain</title>
</head>
<body>
    <h1>Departures of the day.</h1>
    <ul>
        @foreach ($departures as $go)
        <li>
            <p>Departure time: {{$go->departure_hour}}</p>
        </li>
        @endforeach
    </ul>
    <p>{{$trains[0]['brand']}}</p>
</body>
</html>