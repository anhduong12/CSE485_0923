<?php
      $a = [
      'a' => [
      'b' => 0,
      'c' => 1
      ],
      'b' => [
      'e' => 2,
      'o' => [
      'b' => 3
      ]
      ]
      ];
      $value1 = $a['b']['o']['b'];
      $value2 = $a['a']['c'];
      echo "Giá trị = 3 mà có key là b",$value1, "<br>";
      echo "Giá trị = 1 mà có key là c",$value2, "<br>"; 
?>