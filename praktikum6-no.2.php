<?php

interface Flyer
{

    public function takeOff();

    public function land();

    public function fly();
}

class Airplane implements Flyer
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

class Bird implements Flyer
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
}

class Superman implements Flyer
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
}



?>
