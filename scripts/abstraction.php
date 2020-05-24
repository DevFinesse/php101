<?php

    abstract class Structure {
        public $address = '';
        public $doorsLocked = false;
        public $lightsOn = false;

        public function __construct($address){
            $this->$address = $address;
        }

        public function toggleLights(){
            $this->lightsOn = !$this->lightsOn;
        }

        abstract public function lockDoors();
    }

    class House extends Structure{
        public function lockDoors(){
            $this->doorLocked = true;
        }
    }

    $house = new House('123 Main Street');
    var_dump($house->lightsOn);
    echo '<br/>';
    $house->toggleLights();
    var_dump($house->lightsOn);
    echo '<br/>';

    //cannot intantiate an abstract class, you must extend it
    //$structure = new Structure('222 apple road');

?>