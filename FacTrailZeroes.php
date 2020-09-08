<?php
//https://leetcode.com/problems/factorial-trailing-zeroes/submissions/
class TrailingZeroes {

    function trailingZeroes($n) {
        
        $cnt = 0;
        
        while($n > 0) {
            $n /= 5;
            $cnt += n;
        }
        
        return $cnt;
        
    }
}

?>