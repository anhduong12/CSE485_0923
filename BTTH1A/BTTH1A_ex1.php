<?php
    $sum = null;
    $tong = array_sum($arrs);
    echo "Tổng các phần tử = 2 + 5 + 6 + 9 + 2 + 5 + 6 + 12 + 5 = {$tong} <br>" ;
    $tich = array_product($arrs);
    echo "Tich các phần tử = 2 * 5 * 6 * 9 * 2 * 5 * 6 * 12 * 5 = {$tich} <br>" ;
    $hieu;
    $thuong=null;
    for($i = 0; $i < count($arrs); $i++){
        if ( $i == 0 ){
            $hieu = $arrs[0];
        }else{
            $hieu-=$arrs[$i];
        }
    }
    echo "Hiệu các phần tử = 2 - 5 - 6 - 9 - 2 - 5 - 6 - 12 - 5 = {$hieu} <br>" ;
    for($i = 0; $i < count($arrs); $i++){
        if ( $i == 0 ){
            $thuong= $arrs[0];
        }else{
            $thuong=$thuong/$arrs[$i];
        }
    }
    $thuong=number_format($thuong,10);
    echo("Thương các phần tử = 2 / 5 / 6 / 9 / 2 / 5 / 6 / 12 / 5 = {$thuong} <br>" ) ;
?>