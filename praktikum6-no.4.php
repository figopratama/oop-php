<?php

interface Sailer
{
    public function dock();

    public function cruise();

}

interface Flyer
{
    public function takeOff();

    public function land();

    public function fly();
}

abstract class Vehicle
{
}

class RiverBadge implements Vehicle, Sailer
{
    public function dock(){
        // Riverbadge docks
    }
    
    public function cruise(){
        // Riverbadge cruises
    }
}


class Airplane implements Vehicle, Flyer
{
    public function takeOff(){
        // Airplane takes off
    }
    
    public function land(){
        // Airplane lands
    }
 
    public function fly(){
        // Airplane flies
    }
}

class SeaPlane implements Airplane, Sailer
{
    public function dock(){
        // Seaplane docks
    }
    
    public function cruise(){
        // Seaplane cruises
    }
}

class Helicopter extends Airplane
{
}



?>
