<?php
//https://leetcode.com/problems/self-dividing-numbers/
class Solution {
    
    function selfDividingNumbers($left, $right) {
      $output= array();
        
     
        
         while($left<=$right)
        {  
        $splittedNum = str_split($left);
        $flag=true;
         foreach ($splittedNum as $digit) 
         {
            if($digit == 0)
            {
                $flag=False;
                break;
            }

            if($left%$digit != 0)
            {
             $flag=False;
            }
        }
        if($flag==True){
                array_push($output,$left);
        }
        $left++;
        }
        
        return $output;
    }
}

?>