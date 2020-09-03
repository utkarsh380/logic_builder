<?php
//https://leetcode.com/problems/hamming-distance/
class HammingDistance {

    function hammingDistance($x, $y) {
       
       $cnt = 0;
        $n = $x ^ $y;
        while($n)
        {
        if($n % 2 == 1)
        $cnt++;
        $n = $n / 2;
        }
        return $cnt;
    }
}
?>