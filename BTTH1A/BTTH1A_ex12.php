<?php
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
   ];
   
   $first_element = reset($numbers);
   $last_element = end($numbers);
   
   echo "Phan tu dau tien: $first_element<br>";
   echo "PPhan tu cuoi cung: $last_element<br>";
   
   $max_value = max($numbers);
   $min_value = min($numbers);
   $sum = array_sum($numbers);
   
   echo "So lon nhat: $max_value<br>";
   echo "So nho nhat: $min_value<br>";
   echo "Tong cac gia tri: $sum<br>";
   
   asort($numbers);
   echo "Sap xep mang theo chieu tang giam cac gia tri: <br>";
   print_r($numbers);
   
   ksort($numbers);
   echo "Sap xep mang theo chieu tang giam cac key:<br>";
   print_r($numbers);

?>