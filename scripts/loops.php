<?php

    //for loop
    for($i = 0;$i<10;$i++){
        echo $i+1 . ': I will not look at the keyboard when i type.', '<br/>';
    }

    //while loop
    $i = 0;
    while($i<10){
        echo $i+1 . ': I am in the while loop.', '<br/>';
        $i++;
    }

    //foreach loop
    $favoriteColors = ['red','green','purple','blue'];
    foreach($favoriteColors as $color){
        echo $color . '<br/>';
    }
     
    $person = ['first name' => 'Babatunde', 'Last Name' => 'Isaac', 'age' => '25','job' => 'web developer'];
    echo 'Attributes of a person.<br/>';
    foreach($person as $key => $value){
        echo '<b/>'.$key.'</b>'.$value.'<br/>';
    }

?>