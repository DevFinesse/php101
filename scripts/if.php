<?php

    echo 'we are learning about if statements', '<br/>';
    echo 'the second line happened', '<br/>';
    echo 'the third line happened', '<br/>';

    if(true) {
        echo 'im in the if statement' . '<br/>';
    }

    $favoriteColor = 'green';

    if($favoriteColor == 'green'){
        echo 'your favorite color is green' . '<br/>';
    } else {
        echo 'your favorite is not green' . '<br/>';
    }

    $favoriteCar = 'Tesla';
    if($favoriteCar == 'Chevy'){
        echo 'your favorite car is chevy' . '<br/>';
    }else if($favoriteCar == 'Ford'){
        echo 'your favorite car is a ford' . '<br/>';
    }else {
        echo 'i dont know your favorite kind of car';
    }
?>