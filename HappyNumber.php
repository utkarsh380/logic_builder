<?php
//https://leetcode.com/problems/happy-number/submissions/
class HappyNumber {

    function isHappy($n) {
       $firstsquare = $n;
        $current = $n;
        do
        {
           $firstsquare = squareadd($firstsquare);
            $current = squareadd(squareadd($current));
        }
        while($current != $firstsquare);
        
        return $firstsquare==1;

    }
   
}

    function squareadd($n)
    {
        $r;
        $s=0;
        while ($n>0)
        {
            $r=$n%10;
            $s=$s+$r*$r;
            $n=$n/10;  
        }
        return $s;
    
    }
?>