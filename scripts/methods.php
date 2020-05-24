<?php
    //class is a blueprint for an object
    class House {
        //properties
        public $temp = 65;
        public $doorColor = 'red';
        public $address = '';
        public $amountOfHotWater = 55;
        public $roof = 'shingles';

        public function __construct($address,$doorColor){
            $this->address = $address;
            $this->doorColor = $doorColor;
        }

        //methods
        public function heat($temp = 2){
            $this->temp = $this->temp + $temp; 
        }

        public function cool($temp = 2){
            $this->temp = $this->temp -$temp;
        }

    }

    //instatiating an object from the House class
    $house1 = new House('123, Main Street','green');
    $house2 = new House('456 second street','blue');

    $house1->heat(22);
    $house2->cool(5); 

   
?>

<pre><?php var_dump($house1);?></pre>
<pre><?php var_dump($house2);?></pre>

<h3> House 1 is located at <?php echo $house1->address; ?> , it has a  <?= $house1->doorColor ?> door</h3>
<h3> House 1 is located at <?php echo $house2->address; ?> , it has a  <?= $house2->doorColor ?> door</h3>

