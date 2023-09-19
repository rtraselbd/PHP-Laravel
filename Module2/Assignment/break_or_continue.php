<?php
$first = 0;
$second = 1;

echo "First 10 Fibonacci numbers (up to 100):\n";

for ($i = 0; $i < 10; $i++) {
    if ($first > 100) {
        break; // Break the loop if the Fibonacci number exceeds 100
    }

    echo $first . ' ';

    $next = $first + $second;
    $first = $second;
    $second = $next;
}