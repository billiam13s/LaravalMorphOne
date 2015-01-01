<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    $vehicles   = Vehicle::all();
    $cars       = Car::all();
    $trucks     = Truck::all();

	return View::make('hello', compact('vehicles', 'cars', 'trucks'));
});

Route::get('/vehicles', array('as' => 'vehicle.index', function()
{
    $vehicles = Vehicle::with('vehicleable')->get();

    return $vehicles;
}));

Route::get('/vehicle/{id}', array('as' => 'vehicle.show', function($id)
{
    $vehicle = Vehicle::with('vehicleable')->find($id);

    return $vehicle;
}));

Route::get('/cars', array('as' => 'car.index', function()
{
    $cars = Car::with('vehicle')->get();

    return $cars;
}));

Route::get('/car/{id}', array('as' => 'car.show', function($id)
{
    $car = Car::with('vehicle')->find($id);

    return $car;
}));

Route::get('/trucks', array('as' => 'truck.index', function()
{
    $trucks = Truck::with('vehicle')->get();

    return $trucks;
}));

Route::get('/truck/{id}', array('as' => 'truck.show', function($id)
{
    $truck = Truck::with('vehicle')->find($id);

    return $truck;
}));