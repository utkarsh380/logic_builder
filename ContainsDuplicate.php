<?php
//CONTAINS-DUPLICATE PROBLEM
//https://leetcode.com/submissions/detail/389354024/
class ContainsDuplicate {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {

           return count($nums) != count(array_unique($nums)); 
}
}
?>
