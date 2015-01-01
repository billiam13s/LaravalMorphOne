<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test</title>
</head>
<body>
    {{ link_to_route('vehicle.index', 'Vehicles') }}
    <ul>
        @foreach($vehicles as $vehicle)
        <li>
            {{ link_to_route('vehicle.show', $vehicle->name, $vehicle->id) }}
        </li>
        @endforeach
    </ul>

    {{ link_to_route('car.index', 'Cars') }}
    <ul>
        @foreach($cars as $car)
        <li>
            {{ link_to_route('car.show', $car->vehicle->name, $car->id) }}
        </li>
        @endforeach
    </ul>

    {{ link_to_route('truck.index', 'Trucks') }}
    <ul>
        @foreach($trucks as $truck)
        <li>
            {{ link_to_route('truck.show', $truck->vehicle->name, $truck->id) }}
        </li>
        @endforeach

    </ul>
</body>
</html>
