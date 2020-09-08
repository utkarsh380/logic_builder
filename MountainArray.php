<?php
//https://leetcode.com/problems/peak-index-in-a-mountain-array/submissions/
class Solution {
    function peakIndexInMountainArray($arr) {
         
        if (sizeof($arr) < 3) {
            return -1;
        }
        $idx = -1;
        for ($i = 1; $i < sizeof($arr) - 1; $i++) {
            if ($arr[$i] > $arr[$i - 1] && $arr[$i] > $arr[$i + 1]) {
                return $i;
            }
        }
        return $idx;
}
}
?>