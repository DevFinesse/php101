<?php
    //class is a blueprint for an object
    class House {
        //properties
        public $temp = 65;
        public $doorColor = 'red';
        public $address = '';
        public $amountOfHotWater = 55;
        public $roof = 'shingles';
        public static $count = 0;

        public function __construct($address,$doorColor){
            $this->address = $address;
            $this->doorColor = $doorColor;
            self::$count = self::$count + 1;
        }

        //methods
        public function heat($temp = 2){
            $this->temp = $this->temp + $temp; 
        }

        public function cool($temp = 2){
            $this->temp = $this->temp -$temp;
        }

        public static function neededShingles($length,$width){
            $sqft = $length * $width;
            $bundles = $sqft / 36;
            return $bundles;
        }

    }

    class fancyHouse extends House{
        //properties
        public $pool = true;
        public $poolLights = false;
        public $garage = 2;
        public $amountOfHotWater = 85;


        //methods
        public function turnOnPoolLights(){
            $this->poolLights = true;
        }

        public function turnOffPoolLights(){
            $this->poolLights = false;
        }

    }


    //you do not have to instantiate a class to use a static method ::
    echo House::neededShingles(30,15);

    
    echo House::$count,'<br/>';
    $house1 = new House('123, Main Street','green');
    echo House::$count,'<br/>';
    $house2 = new fancyHouse('456 second street','blue');
    

    echo $house2::$count,'<br/>';
    echo House::$count, '<br/>';
    

   
?>

