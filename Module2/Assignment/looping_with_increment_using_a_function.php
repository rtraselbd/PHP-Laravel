<?php

function printEvenNumbers($start, $end, $step) {
    $i = $start;
    for ($i; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . ' ';
        }
    }
}
printEvenNumbers(1, 20, 1);


function printEvenNumbersWhile($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 == 0) {
            echo $i . ' ';
        }
        $i += $step;
    }
}

printEvenNumbersWhile(1, 20, 1);

function printEvenNumbersDoWhile($start, $end, $step) {
    $i = $start;
    do {
        if ($i % 2 == 0) {
            echo $i . ' ';
        }
        $i += $step;
    } while ($i <= $end);
}

printEvenNumbersDoWhile(1, 20, 1);
