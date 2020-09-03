<?php
//https://leetcode.com/problems/remove-duplicates-from-sorted-array/
class RemoveDuplicates {

function removeDuplicates(&$n) {
    
            if (sizeof($n) <= 1) return sizeof($n);
    $len = sizeof($n);
     $i=0;
    $j=1;
    while($j<$len) {
        if ($n[$i] != $n[$j]) {
            $n[++$i] = $n[$j];
        }
        $j++;
    }
    return $i+1;

}
}
?>