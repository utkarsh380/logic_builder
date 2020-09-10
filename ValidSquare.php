<?php
//https://leetcode.com/problems/valid-perfect-square/
class Solution {

    function isPerfectSquare($num) {
        
      for($i = 0; $i <= $num; $i++) 
      {
       if($i * $i === $num)
       {
      
         return true;
      }
          
     }
    return false;
    }
    
}
?>