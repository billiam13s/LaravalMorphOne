<?php

class VehicleSeeder extends Seeder {

    public function run()
    {
        DB::table('vehicle')->truncate();
        DB::table('car')->truncate();
        DB::table('truck')->truncate();

        Car::create(['name'=>'Car1', 'trunk'=>true]);

        Truck::create(['name'=>'Truck1', 'bed_type'=>'Open']);
        
        $car = new Car;
        $car->fill(['name'=>'Car2', 'trunk'=>false]);
        $car->save();

        $truck = new Truck;
        $truck->fill(['name'=>'Truck2', 'bed_type'=>'Cover']);
        $truck->save();

    }

}