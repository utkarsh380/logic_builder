<?php
//CONTAINS-DUPLICATE PROBLEM
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
