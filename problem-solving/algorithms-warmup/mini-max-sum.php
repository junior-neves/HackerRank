<?php

function miniMaxSum($arr) {
    $minValue = 0;
    $maxValue = 0;

    sort($arr);

    for ($i = 0; $i < 4; $i++) {
        $minValue += $arr[$i];
    }

    for ($i = 4; $i > 0; $i--) {
        $maxValue += $arr[$i];
    }

    echo $minValue." ".$maxValue;

}
