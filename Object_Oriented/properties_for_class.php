<?php
class Cars {

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function MoveWheels() {
        echo "Wheels move";
    }
}

$bmw = new Cars();

$bmw->wheels = 8;
echo $bmw->wheels;
echo $bmw->hood;
echo $bmw->engine;
echo $bmw->doors;


$bmw->MoveWheels();