<?php
//https://leetcode.com/problems/ugly-number/

class Solution {

    function isUgly($num) {
        if($num==1)
            return true;
        while($num>0)
        {
             if($num%2==0)
             { 
                 $num=$num/2;  
                 if($num==1)return true;
             }
          
            else if($num%3==0) 
            {
            $num=$num/3;   
            if($num==1)
             return true;
            }
       
            else if($num%5==0) 
            {
                $num=$num/5; 
                 if($num==1)
                 return true;
            }
           
            else if($num%2!=0||$num%3!=0||$num%5!=0)
            return false;
        }  
    }
}
?>