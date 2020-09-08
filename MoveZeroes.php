<?php
//https://leetcode.com/problems/move-zeroes/
class Solution {

    function moveZeroes(&$nums) {
         $N = sizeof($nums);
        $left = 0;
        $right = 0;
        
        while($right < $N){
            if($nums[$right] != 0) {
                $temp = $nums[$right];
                $nums[$right] = $nums[$left];
                $nums[$left++] = $temp;
            }
           $right++;
        }
    }
}
?>