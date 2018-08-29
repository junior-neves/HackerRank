<?php

function birthdayCakeCandles($ar) {
    $maxCandle = 0;
    $candleCounter = 0;

    foreach ($ar as $candle) {
        if ($candle > $maxCandle) {
            $maxCandle = $candle;
            $candleCounter = 1;
        } else if ($candle == $maxCandle) {
            $candleCounter++;
        }
    }

    return $candleCounter;
}