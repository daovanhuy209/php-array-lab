<?php

function daoNguocMang($mang){

    $mangMoi = [];
    $n = count($mang);

    for($i = $n-1; $i >= 0; $i--){
        $mangMoi[] = $mang[$i];
    }

    return $mangMoi;
}

$numbers = [1,2,3,4,5];

$mangDaoNguoc = daoNguocMang($numbers);

print_r($mangDaoNguoc);

?>
