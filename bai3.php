<?php

function timGiaTri($giaTri,$mang){

    for($i = 0; $i < count($mang); $i++){

        if($mang[$i] == $giaTri){
            return $i;
        }

    }

    return -1;

}

$traiCay = ["Apple","Banana","Cherry"];

$index = timGiaTri("Banna",$traiCay);

echo $index;

?>
