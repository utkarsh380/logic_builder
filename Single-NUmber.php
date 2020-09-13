<?php

//https://leetcode.com/problems/single-number/
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
            
     $res = 0;
    for ($i = 0; $i < sizeof($nums); $i++) {
        $res = $res ^ $nums[$i];
    }
    return $res;
   }
}
?>