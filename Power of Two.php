<?php

//https://leetcode.com/problems/power-of-two/
class Solution {

    function isPowerOfTwo($n) 
    {
         while($n>0){
          
            if($n==1) return true;
            if($n%2 !=0) return false;
           $n/=2;
            
        } 
        return false;
    }
    
}

?>