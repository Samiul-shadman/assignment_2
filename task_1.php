<?php

//with for loop
function printEvenNumbersWithForLoop($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}

$start = 2;
$end = 20;
$step = 2;
echo "Using for loop: ";
printEvenNumbersWithForLoop($start, $end, $step);
echo "\n";

//with while loop
function printEvenNumbersWithWhileLoop($start, $end, $step) {
    while ($start <= $end) {
        if ($start % 2 == 0) {
            echo $start . " ";
        }
        $start += $step;
    }
}

$start = 2;
$end = 20;
$step = 2;
echo "Using while loop: ";
printEvenNumbersWithWhileLoop($start, $end, $step);
echo "\n";

//with do-while loop

function printEvenNumbersWithDoWhileLoop($start, $end, $step) {
    do {
        if ($start % 2 == 0) {
            echo $start . " ";
        }
        $start += $step;
    } while ($start <= $end);
}

$start = 2;
$end = 20;
$step = 2;
echo "Using do-while loop: ";
printEvenNumbersWithDoWhileLoop($start, $end, $step);
echo "\n";
