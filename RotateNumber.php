<?php
class RotateNumber {

/**
 * @param Integer[] $nums
 * @param Integer $k
 * @return NULL
 */
function rotate(&$nums, $k) {
    for ($i = 0; $i < $k; $i++) {
        array_push($nums, array_shift($nums));
    }
}
}
?>