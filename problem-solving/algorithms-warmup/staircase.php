<?php

function staircase($n) {
    $totalSpaces = $n - 1;
    for ($i = $n; $i > 0; $i--) {
        for ($j = 0; $j < $n; $j++) {
            if ($j < $totalSpaces) { echo " "; }
            else { echo "#"; }
        }
        $totalSpaces--;
        echo "\n";
    }
}