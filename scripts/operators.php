<?php
        // Arithimetic Operators
        echo '<h3>Arithimetic operators</h3>' ;
        $x = 5;
        $y = 3;

        $answer = $x + $y;
        echo $answer, '<br/>'; 
       
        $answer = $x - $y;
        echo $answer, '<br/>';
       
        $answer = $x * $y;
        echo $answer, '<br/>';
       
        $answer = $x / $y;
        echo $answer, '<br/>';

        $answer = $x % $y;
        echo $answer, '<br/>';

        $answer = $x ** $y;
        echo $answer, '<br/>'; 

        //Assignment Operators
        echo '<h3>Assignment operators</h3>' ;
        $x = 10;
        echo $x , '<br />';

        $x +=3; // $x = $x + 3;
        echo $x , '<br />';

        $x -= 3; //$x = $x-3;
        echo $x , '<br />';

        $x *= 3; //$x = $x * 3;
        echo $x , '<br />';

        $x /= 3; //$x = $x/3;
        echo $x , '<br />';

        $x %= 3; //$x = $x%3;
        echo $x , '<br />';

        //Comparison Operators
        echo '<h3>Comparison operators</h3>';
        $x = 3;
        $y = 4;

        $answer = $x == $y;
        var_dump($answer);
        echo '<br/>';
        
        $x = 3;
        $y = '3';
        $answer = $x == $y;
        var_dump($answer);

        echo '<br/>';

        $answer = $x === $y;
        var_dump($answer);

        echo '<br/>';

        $x = 4;
        $y = 4;
        $answer = $x != $y;
        var_dump($answer);
        echo '<br/>';

        $x = 4;
        $y = 4;
        $answer = $x <> $y;
        var_dump($answer);
        echo '<br/>';

        
        $x = 4;
        $y = '4';
        $answer = $x !== $y;
        var_dump($answer);
        echo '<br/>';

        
        $x = 4;
        $y = 5;
        $answer = $x > $y;
        var_dump($answer);
        echo '<br/>';

        $x = 4;
        $y = 5;
        $answer = $x < $y;
        var_dump($answer);
        echo '<br/>';

        $x = 4;
        $y = 4;
        $answer = $x >= $y;
        var_dump($answer);
        echo '<br/>';

        $x = 4;
        $y = 5;
        $answer = $x <= $y;
        var_dump($answer);
        echo '<br/>';


        
        //Increment / Decrement Operators
        echo '<h3>Increment / Decrement Operators</h3>';
        $x = 4;
        $x++; // $x = $x + 1;
        echo $x, '<br/>';
        echo $x++, '<br/>'; //returns $x, then it adds 1 to $x
        echo $x, '<br/>';
        $x= 6;
        echo ++$x, '<br/>'; //adds 1 to $x, then return $x

        $x= 6;
        echo --$x, '<br/>'; //subtracts 1 from $x, then return $x

        $x= 6;
        echo $x--, '<br/>'; //return $x, then subtracts 1 from $x, 
        echo $x;


        //Logical Operators
        echo '<h3>Logical Operators</h3>';
        $x = 1;
        $y = 2;
        var_dump($x == $y);
        echo '<br/>';

        $x = 1;
        $y = 2;
        $z = 1;
        $answer = $x == $y && $x == $z; 
        var_dump($answer);
        echo '<br/>';

        $x = 1;
        $y = 2;
        $z = 1;
        $answer = $x == $y || $x == $z; 
        var_dump($answer);
        echo '<br/>';


        $x = false;
        var_dump(!$x);
        echo '<br/>';


        $x = true;
        $y = false;
        var_dump($x xor $y); //$x can be true, $y can be true , but $x and $y cannot be true


        //String Operators
        echo '<h3>String Operators</h3>';
        $string = 'Hello';
        echo $string, '<br/>';
        $string2 = $string . ' World'; //contatenation
        echo $string2, '<br/>';

        $first_name = 'Babatunde';
        $last_name = 'Isaac';
        echo $first_name . ' ' . $last_name, '<br/>';

        $string = 'My favorite color is';
        $string .= ' orange';
        echo $string, '<br/>';

?>