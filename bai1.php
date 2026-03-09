<?php

function xapXep(&$mang){
    $n = count($mang);

    for($i = 0; $i < $n - 1; $i++){
        for($j = $i + 1; $j < $n; $j++){

            if($mang[$i] > $mang[$j]){
                $temp = $mang[$i];
                $mang[$i] = $mang[$j];
                $mang[$j] = $temp;
            }

        }
    }
}

$numbers = [4, 2, 8, 1];

xapXep($numbers);

print_r($numbers);

?>
