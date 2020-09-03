<?php
//CONTAINS-DUPLICATE PROBLEM
//https://leetcode.com/problems/contains-duplicate/
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
