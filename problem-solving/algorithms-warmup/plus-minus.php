<?php

function plusMinus($arr) {
    $totalArray = count($arr);
    $totalP = $totalN = $totalZ = 0;
    foreach ($arr as $number) {
        if ($number == 0) { $totalZ++; }
        else if ($number > 0) { $totalP++; }
        else { $totalN++; }
    }

    print($totalP/$totalArray."\n");
    print($totalN/$totalArray."\n");
    print($totalZ/$totalArray);
}