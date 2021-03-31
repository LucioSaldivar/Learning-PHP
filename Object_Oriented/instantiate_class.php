<?php
class Cars {
    function MoveWheels() {
        echo "Wheels move";
    }
}


$bmw = new Cars();
$nissan = new Cars();

$bmw->MoveWheels();

$nissan->MoveWheels();




