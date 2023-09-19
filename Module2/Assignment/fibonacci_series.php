<?php

function printFibonacciNumbers($count) {
    $first = 0;
    $second = 1;

    echo "First $count Fibonacci numbers:\n";

    for ($i = 0; $i < $count; $i++) {
        echo $first . ' ';

        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}

printFibonacciNumbers(15);
