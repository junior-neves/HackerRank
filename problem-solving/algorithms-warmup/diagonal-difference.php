<?php

function diagonalDifference($arr) {
    $n = count($arr);
    $totalLR = $totalRL = 0;

    for ($i = 0; $i < $n; $i++) {
        $totalLR += $arr[$i][$i];
        $totalRL += $arr[$i][($n-1) - $i];
    }

    return abs($totalLR - $totalRL);
}