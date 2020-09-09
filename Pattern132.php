<?php
//https://leetcode.com/problems/132-pattern/
class Solution {
    
    function find132pattern($nums) {

        if($nums==null || sizeof($nums)<3) return false;
        
        $min = nums[0];
        $n = sizeof($nums);
        for($i=1;$i<$n-1;$i++){
            if($nums[$i]>$min){
                for($j=$i+1;$j<$n;$j++){
                    if($nums[$j]<$nums[$i] && $nums[$j]>$min){
                        return true;
                    }
                }
            }
            
           $min = Math.min($min, $nums[$i]);
        }
        
        return false;
  }
    
}
?>