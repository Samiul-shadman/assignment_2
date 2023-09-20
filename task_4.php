<?php

function generateFibonacci($n) {
    $a = 0;
    $b = 1; 

    
    echo $a . ", " . $b;

    for ($i = 2; $i < $n; $i++) {
        $nextNumber = $a + $b;
        echo ", " . $nextNumber;

        
        $a = $b;
        $b = $nextNumber;
    }
}

generateFibonacci(15);