<?php
//https://leetcode.com/problems/reverse-integer/
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($num) {
        
        $isNegative = $num<0;
        if($isNegative){
            $num=$num*-1;
        }
        if($num <= 9){
            return $num;
        }
      $revnum = 0;  
       while ($num > 1)   
        {  
        $rem = $num % 10;  
        $revnum = ($revnum * 10) + $rem;  
        $num = ($num / 10);   
        }
         if($isNegative){
            $revnum = $revnum*-1;
        }
        return $revnum;
        
    }
?>
