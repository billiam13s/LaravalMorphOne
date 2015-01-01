<?php

class Car extends Eloquent {
    protected $table = 'car';
    protected $fillable = ['trunk'];

    public function save(array $options = array())
    {
        $data = [];
        if(array_key_exists('name', $this->attributes))
        {
            $data['name'] = $this->attributes['name'];
            unset($this->attributes['name']);
        }
        $saved = parent::save($options);

        $this->vehicle()->create($data);

        return $saved;
    }

    public function vehicle()
    {
        return $this->MorphOne('Vehicle', 'vehicleable');
    }
}