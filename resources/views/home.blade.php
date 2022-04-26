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
            <h4>{{$go->departure_station}} - {{$go->arrive_station}}</h4>
            <p>Train code: {{$go->train_code}}</p>
            <p>Departure time: {{$go->departure_hour}}</p>
            <p>Arrive time: {{$go->arrive_hour}}</p>
        </li>
        @endforeach
    </ul>
</body>
</html>