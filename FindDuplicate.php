<?php
//https://leetcode.com/problems/find-the-duplicate-number/
class FindDuplicate {

function findDuplicate($nums) {
    $len= sizeof($nums);
        $val=0;
        for ($i = 0; $i < $len-1; $i++) {
             for ($j = $i+1; $j < $len; $j++) {
               if($nums[$i]==$nums[$j])
               {
                $val =$nums[$i];  
               return $val;
               }
           }
        }
}
}
?>