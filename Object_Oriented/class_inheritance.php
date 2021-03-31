<?php
class Cars {

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function MoveWheels() {
        $this->wheels = 6;
    }

    function CreateDoors(){
        $this->doors = 6;
    }
}

class Plane extends Car{


}

$jet = new Plane();

echo $jet->wheels;
