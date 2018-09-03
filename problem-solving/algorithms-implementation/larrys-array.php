<?php

function larrysArray($A) {
    $ASorted = $A;
    sort($ASorted);
    $sorting = TRUE;

    while ($sorting) {
        $sorting = false;
        for($i = 0; $i < count($A) - 2; $i++) {
            $a = $A[$i];
            $b = $A[$i + 1];
            $c = $A[$i + 2];
            $min = min($a, $b, $c);
            if($min == $b) {
                $A[$i] = $b;
                $A[$i + 1] = $c;
                $A[$i + 2] = $a;
                $sorting = true;
            } elseif($min == $c) {
                $A[$i] = $c;
                $A[$i + 1] = $a;
                $A[$i + 2] = $b;
                $sorting = true;
            }
        }
    }
    if ($A == $ASorted) {
        return "YES";
    } else {
        return "NO";
    }

}
