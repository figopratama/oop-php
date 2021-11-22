<?php

abstract class Vehicle
{
    abstract function Vehicle(): float;

    public function getLoad(float $load): float;

    public function getMaxLoad(float $maxLoad): float;

    public function addBox(): float;

    public function calcFuelNeeds(): float;

    abstract function calcFuelEfficiency(): float;

    abstract function calTripDistance(): float;
}

class Truck extends Vehicle
{
    float $load;
    float $maxLoad;

    function Vehicle(float $maxLoad): float{

    }

    function calcFuelEfficiency(): float{

    }

    function calTripDistance(): float{

    }
}

class RiverBadge extends Vehicle
{
    float $load;
    float $maxLoad;

    function Vehicle(float $maxLoad): float{

    }

    function calcFuelEfficiency(): float{

    }

    function calTripDistance(): float{

    }
}



?>
