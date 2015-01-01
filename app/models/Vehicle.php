<?php

class Vehicle extends Eloquent {
    protected $table = 'vehicle';
    protected $fillable = array('name');

    public function vehicleable()
    {
        return $this->morphTo();
    }

}