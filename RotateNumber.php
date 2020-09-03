<?php
class RotateNumber {
//https://leetcode.com/submissions/detail/390282323/
/**
 * @param Integer[] $nums
 * @param Integer $k
 * @return NULL
 */
function rotate(&$nums, $k) {
    for ($i = 0; $i < sizeof($nums); $i++)
    {  
      // echo $nums[$i]." ";  
    }  
  
    for($i = 0; $i < $k; $i++){  
        $j; 
        $first;  
       
        $first = $nums[0];  
        for($j = 0; $j < sizeof($nums)-1; $j++)
        {  
          
            $nums[$j] = $nums[$j+1];  
        }  
          
        $nums[$j] = $first;  
    }  

    for($i = 0; $i< sizeof($nums); $i++)
    {  
       // echo $nums[$i]." ";
      
    } 
  return $nums[$i]." ";
}
}
?>