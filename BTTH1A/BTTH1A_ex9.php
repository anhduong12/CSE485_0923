<?php

function convertToLowerCase($arr) {
    $result = [];

    foreach ($arr as $item) {
        if (is_string($item)) {
            $result[] = strtolower($item);
        } else {
            $result[] = $item;
        }
    }

    return $result;
}

$arr1 = ['a', 'b', 'ABC'];
$arr2 = ['1', 'B', 'C', 'E'];
$arr3 = ['a', 0, null, false];

$result1 = convertToLowerCase($arr1);
$result2 = convertToLowerCase($arr2);
$result3 = convertToLowerCase($arr3);

echo "Kết quả mảng 1: ";
var_dump($result1);

echo "Kết quả mảng 2: ";
var_dump($result2);

echo "Kết quả mảng 3: ";
var_dump($result3);


?>