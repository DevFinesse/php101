<?php
    //Indexed Arrays
    $favoriteColors = ['red','blue','orange','brown'];
    echo $favoriteColors[0] . '<br/>';
    echo $favoriteColors[1] . '<br/>';
    echo $favoriteColors[2] . '<br/>';
    echo $favoriteColors[3] . '<br/>';

    $favoriteColors[4] = 'purple';
    var_dump($favoriteColors);

    echo '<br/>';
    
    $favoriteColors[] = 'pink';
    var_dump($favoriteColors);
    echo '<br/>';

    // unshift prepends one or more elements to an array
    array_unshift($favoriteColors, 'green'); 
    var_dump($favoriteColors);
    echo '<br/>';

    //Shift an element off the beginning of array, removes first element of an array
    array_shift($favoriteColors);
    var_dump($favoriteColors);
    echo '<br/>';

    //Pop the element off the end of array
    array_pop($favoriteColors);
    var_dump($favoriteColors);
    echo '<br/>';

    //add to the end of an array //Push one or more elements onto the end of array
    array_push($favoriteColors, 'magenta');
    var_dump($favoriteColors);
    echo '<br/>';

    $mixedArray = [123, 'Curtis', true, false];
    echo $mixedArray[0] . '<br/>';
    echo $mixedArray[1] . '<br/>';

    var_dump($mixedArray);
    echo '<br/>';


    //Associative Arrays
    $person = ['first_name' => 'Babatunde', 'last_name' => 'Isaac', 'age' => 25];
    echo $person['first_name'] . ' ' . $person['last_name'] . ' is ' . $person['age'] . ' years old' , '<br/>';

    $person2 = ['first_name' => 'Curtis', 'last_name' => 'Parham', 'age' => 38];
    $person2['job'] = 'php develpoer';
    echo $person2['first_name'] . ' ' . $person2['last_name'] . ' is ' . $person2['age'] . ' years old' , '<br/>';
    var_dump($person2);


    //multidimensional array
    $people = ['husband'=>$person,'wife'=>$person2];
    echo $people['husband']['age'],'<br/>';
    echo '<pre>';
    var_dump($people);
    echo '</pre>';
    echo '<br/>';

?>