<?php

    function dump($array)
    {
        echo '<pre>', var_dump($array),'</pre>';
    }

    //sort and rsort works with indexed array

    $ages = [123,7,55,82,999,1];
    dump($ages);

    sort($ages);
    dump($ages);

    $months = ['January','February','March','April'];

    sort($months);
    dump($months);

    rsort($months);
    dump($months);

    //asort and arsort sorts associative array by value
    $person = ['first'=>'Babatunde','age'=>25,'last' => 'Isaac', 'car' => 'Camry 2014'];
    asort($person);
    dump($person);

    arsort($person);
    dump($person);

    //ksort and krsort sorts associative array by key
    ksort($person);
    dump($person);

    krsort($person);
    dump($person);
?>