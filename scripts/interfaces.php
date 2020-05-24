<?php

    interface iStructure {
        public function heat($temp);
        public function cool($temp);
    }

    class Building implements iStructure{
        public function heat($temp){
            
        }
        public function cool($temp){
            
        }
    }

    class House implements iStructure{
        public function heat($temp){
            
        }
        public function cool($temp){
            
        }
    }

    class Barn implements iStructure{
        public function heat($temp){
            
        }
        public function cool($temp){
            
        }
    }

    $barn = new Barn();
    $house = new House();
    $building =  new Building();

?>