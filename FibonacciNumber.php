<?php
//https://leetcode.com/problems/fibonacci-number/
class FibonacciNumber {
    
    function fib($N) {
        $first = 0;  
        $second = 1; 
        for ($i = 0; $i < $N; $i++) {
            $first = $first + $second;
            $second = $first - $second;
        }
        return $first;
    }
}
?>
