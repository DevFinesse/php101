<?php
    //class is a blueprint for an object
    class House {
        //properties
        private $temp = 65;
        public $doorColor = 'red';
        public $address = '';
        public $amountOfHotWater = 55;
        public $roof = 'shingles';

        public function __construct($address,$doorColor){
            $this->address = $address;
        }

        //methods
        public function heat($temp = 2){
            $this->temp = $this->temp + $temp; 
        }

        public function cool($temp = 2){
            $this->temp = $this->temp -$temp;
        }

        private function paintDoor($color)
        {
            $this->doorColor = $color;
        }

        protected function setDoorColor($color){
            $this->paintDoor($color);
        }

    }

    class fancyHouse extends House{
        //properties
        public $pool = true;
        public $poolLights = false;
        public $garage = 2;
        public $amountOfHotWater = 85;

        public function turnOnPoolLights(){
            $this->poolLights = true;
            $this->setDoorColor('red');
        }

        public function turnOffPoolLights(){
            $this->poolLights = false;
        }

    }

    //instatiating an object from the House class
    //you have to instantiate the class to access the functions and properties
    $house1 = new House('123, Main Street','green');
    $house2 = new fancyHouse('456 second street','purple');
    
    echo $house2->turnOnPoolLights();
?>
