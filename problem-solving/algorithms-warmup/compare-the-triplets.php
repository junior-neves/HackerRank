<?php

function compareTriplets($a, $b) {
    $pointsA = $pointsB = 0;

    for ($i = 0; $i < 3; $i++) {
        if ($a[$i] > $b[$i]) { $pointsA++;}
        else if ($a[$i] < $b[$i]) { $pointsB++;}
    }

    return [$pointsA, $pointsB];
}