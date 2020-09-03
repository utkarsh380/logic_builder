<?php
//https://leetcode.com/problems/find-the-duplicate-number/
class FindDuplicate {

/**
 * @param Integer[] $nums
 * @return Integer
 */
function findDuplicate($nums) {
     $len= sizeof($nums);
    for ($i = 0; $i < $len; $i++) {
        $nums[$nums[$i] % $len] += $len;
    }
    $max = 0;
    $val = -1;
    for ($i = 0; $i < $len; $i++) {
        if ($nums[$i] > $max) {
            $max = $nums[$i];
            $val = $i;
        }
    }
    return $val; 
}
}
?>