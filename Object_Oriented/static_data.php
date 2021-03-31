<?php
class Cars {

    static $wheels = 4;
    var $hood = 1;

    function MoveWheels() {
        Cars::$wheels = 10;
    }

}

$bmw = new Cars();

Cars::MoveWheels();

echo Cars::$wheels;
