<?php

function add($number1 , $number2){
    $answer = $number1 + $number2;
    return $answer;
}


echo add(1467,99880);

function printToScreen($value){
    echo $value . '<br/>';
}

function prettyDump($array){
    echo '<pre>', var_dump($array), '</pre>';
}

$number = add(452,7483);
printToScreen($number);

printToScreen(add(67,345));

$multiAry = [
    'colors' => ['red','green','blue'],
    'places' => ['Nigeria','Benin','Togo'],
    'numbers' => [34,45,67]
];

prettyDump($multiAry);
prettyDump(['firstName' => 'Babatunde', 'lastName' => 'Parham']);
echo('I am a function too bro'); 
?>