<?php
//https://leetcode.com/problems/binary-search/

class BinarySearch {
 
    function search($nums, $target) {
     
      $len = sizeof($nums);
       
        for($i=0 ; $i<$len ; $i++)
        {
            if($nums[$i]==$target)
                return $i;
        }
        return -1;
    }
}
?>