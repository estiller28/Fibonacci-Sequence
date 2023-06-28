<?php

function getFibonacciSequence($num){
    if($num == 0 || $num > 20){
        echo "Please input a number from 1 to 20!";
    }

    $fib = array(0, 1);

    for($i = 2; $i < $num; $i++){
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }

    return $fib;
}

$testCase = getFibonacciSequence(5);

echo implode(", ", $testCase);

?>