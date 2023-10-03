<?php

function ConvertoUpper($array){
    $UppercaseArray = array_map('strtoUpper', $array);
    return $UppercaseArray;
}

$arr1 = [1, 'b', 'c', 'd'];
$arr2 = ['a', 0, null, false];

$result1 = ConvertoUpper($arr1);
$result2 = ConvertoUpper($arr2);

print_r($result1);
print_r($result2);
?>