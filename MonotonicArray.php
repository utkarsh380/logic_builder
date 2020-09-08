<?php
//https://leetcode.com/problems/monotonic-array/
class Solution {
function isMonotonic($A) {
 if(sizeof($A) == 1) return true;
    $dec = false;
    $first = false;
    for($i=1;$i<sizeof($A);$i++){
        if($A[$i] == $A[$i-1]) continue;
        if($A[$i] < $A[$i-1] && !$first){
            $first = true;
            $dec = true;
        } else if($A[$i] > $A[$i-1] && !$first) {
            $first = true;
        } 
        if($first){
            if($dec && $A[$i] > $A[$i-1]) return false;
            if(!$dec && $A[$i] < $A[$i-1]) return false;
        }
    }
    return true;

}
}
?>