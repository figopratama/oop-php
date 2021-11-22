<?php

abstract class Animal
{
    abstract function Eat();
}

abstract class Vehicle
{
}

abstract class HomoSapiens extends Animal
{
}

interface Flyer
{
    public function takeOff();

    public function land();

    public function fly();
}

class Airplane implements Flyer, Vehicle
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

class Bird implements Flyer, Animal
{
    public function takeOff(){
        // Bird takes off
    }
    
    public function land(){
        // Bird lands
    }
 
    public function fly(){
        // Bird flies
    }

    public function buildNest(){
        // Bird builds nest
    }

    public function layEggs(){
        // Bird laying eggs
    }

    public function eat(){
        // Bird eats
    }
}

class Superman implements Flyer, HomoSapiens
{
    public function takeOff(){
        // Superman takes off
    }
    
    public function land(){
        // Superman lands
    }
 
    public function fly(){
        // Superman flies
    }

    public function leapBuilding(){
        // Superman leaps building
    }

    public function stopBullets(){
        // Superman stops bullet
    }

    public function eat(){
        // Superman eats
    }
}



?>
