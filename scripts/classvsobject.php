<?php
    //class is a blueprint for an object
    class House {
        //properties
        public $temp = 65;
        public $doorColor = 'red';
        public $address = '';
        public $amountOfHotWater = 55;
        public $roof = 'shingles';

        //methods
        public function heat($add){

        }

    }

    //instatiating an object from the House class
    $house1 = new House();
    $house2 = new House();

    $house1->temp = 75;

    echo $house1->temp;
    echo '<br/>';

    echo $house2->temp;
    echo '<br/>';
?>

<pre><?php var_dump($house1);?></pre>
<br/>
<pre><?php var_dump($house2);?></pre>
