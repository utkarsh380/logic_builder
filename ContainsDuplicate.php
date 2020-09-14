<?php
//CONTAINS-DUPLICATE PROBLEM
//https://leetcode.com/problems/contains-duplicate/
class ContainsDuplicate {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {

            //return array_diff_assoc($nums, array_unique($nums)); 
        // return count($nums) != count(array_unique($nums));    
        
      for($i=0; $i < count($nums); $i++)
      {
       for($j=0; $j < $i ; $j++)
       {
           if($nums[$j]==$nums[$i])
               return true;
        
       }
      }
        return false;
}
}
?>
