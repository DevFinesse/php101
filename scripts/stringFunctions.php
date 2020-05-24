<?php

    $str = 'The Quick brown Fox juMps over the moon';
    $lower =strtolower($str);
    echo $lower,'<br/>';

    $upper = strtoupper($str);
    echo $upper,'<br/>';

    $ucwords = ucwords($lower);
    echo $ucwords,'<br/>';

    $password = ' password ';

    //this will not pass
    if ($password == 'password'){
        //log them in
    }

    //this will pass
    if(trim($password) == 'password'){
        //then  log them in
    }

    //trims spaces off the beginning of the string
    ltrim($password);

    //trims spaces off the end of the string
    rtrim($password);

    $csv = '23,45,65,67,76,';
    echo  rtrim($csv,','),'<br/>';
    $trimmedCsv = rtrim($csv,',');
    // explode Split a string by a string
    $csvArray = explode(',',$trimmedCsv);
    var_dump($csvArray);
    echo '<br/>';

    foreach ($csvArray as $id){
        echo $id,'<br/>';
    }

    // implode Join array elements with a string
    $array = ['red','green','blue','purple'];
    echo implode(':',$array),'<br/>';

    $price = 45/13;
    echo '$'. $price . '<br/>';

    echo '$'. number_format(4573.34,2,'.',',') . ' <br/>';
?>