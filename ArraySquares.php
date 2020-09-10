<?php

//https://leetcode.com/problems/squares-of-a-sorted-array/
class Solution {

    function sortedSquares($A) {
         $sq = array(); 
         // sort($A);
         $l= sizeof($A);
          
        for($i=0 ; $i<$l ; $i++)
        {
             
            $sq[$i] = $A[$i] * $A[$i];
        }
        sort($sq);
        return $sq;
    }
}
?>