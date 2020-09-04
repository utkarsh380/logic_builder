<?php
//https://leetcode.com/problems/largest-perimeter-triangle/
class LargestPerimeter {

  
    function largestPerimeter($A) {
        sort($A);
        
        for ( $i = sizeof($A) - 1; $i >= 2; $i--) {
            if ($A[$i-1] + $A[$i-2] > $A[$i])
                return $A[$i-1] + $A[$i-2] + $A[$i];
        }
        
        return 0; 
    }
}
?>