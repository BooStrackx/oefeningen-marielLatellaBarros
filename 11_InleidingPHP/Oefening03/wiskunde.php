<?php


function calCulateFactorial($input) {
    $output = 1;
    if($input > 1){
        for($i = 2; $i <= $input; $i++){
            $output *= $i;
        }
    }
    return $output;
}
