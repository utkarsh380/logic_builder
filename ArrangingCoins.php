<?php
//https://leetcode.com/problems/arranging-coins/
class Solution {

    function arrangeCoins($n) {
           $i = 0; 
        while($i++ < $n)
           $n = $n-$i; 
        return $i-1; 
    }
}
?>
