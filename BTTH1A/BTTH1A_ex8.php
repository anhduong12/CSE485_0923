<?php
   $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

   $dodai_max = null;     
   $dodai_min = PHP_INT_MAX;

   $chuoi_max = null;
   $chuoi_min = null;

   foreach($array as $chuoi){
       $length = strlen($chuoi);
       
       if($length > $dodai_max){
               $dodai_max = $length;
               $chuoi_max= $chuoi;
       }
       if($length < $dodai_min){
               $dodai_min = $length;
               $chuoi_min = $chuoi;
       }
   }
   echo "Chuỗi lớn nhất là $chuoi_max, độ dài = $dodai_max<br>";
   echo "Chuỗi lớn nhất là $chuoi_min, độ dài = $dodai_min";

?>