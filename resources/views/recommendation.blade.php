<!DOCTYPE html>
<html>
<head>
    <title>Hotel Recommendations</title>
</head>
<body>
    <h1>Hotel Recommendations</h1>

    

    <h2>Recommendations using {{ ucfirst($method) }}</h2>
    <ul>
        @foreach($recommendedHotels as $hotel)
            <li>{{ $hotel->name }} - {{ $hotel->location }}</li>
        @endforeach
    </ul>
</body>
</html>
