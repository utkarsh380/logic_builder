<?php
//https://leetcode.com/submissions/detail/390307914/
class OddCount {

    /**
     * @param Integer $low
     * @param Integer $high
     * @return Integer
     */
    function countOdds($low, $high) {
        $odd=0;
        
        for($i = $low; $i <= $high; $i++)
        {
             if($i % 2 == 0)
               { 
                //echo "Even";
                 //$odd=$odd+1;
                } 
            else{ 
                
                $odd=$odd+1;
               // echo $odd;
                } 
        }
        return $odd;
    }
}
?>