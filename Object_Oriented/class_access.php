<?php
class Cars {

    public $wheels = 4;
    protected $hood = 1;
    private $engine = 1;
    var $doors = 4;
    function showProperty() {
        echo $this->engine;
    }

}

class Semi extends Cars{
    function showProperty() {
        echo $this->hood;
    }
}

$bmw = new Cars();
echo $bmw->wheels;
echo $bmw->showProperty();

$semi = new Semi();
echo $semi->showProperty();

