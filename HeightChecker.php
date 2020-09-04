<?php
//https://leetcode.com/problems/height-checker/
class Solution {

    function heightChecker($heights) {
        
         $count = 0;
        $n = sizeof($heights);
        $freq = array();
        for($i=0;$i<$n;$i++){
            $freq[$heights[$i]]++;
        }
        $index = 0;
        for($i=1;$i<101;$i++){
            while($i < 101 && $freq[$i] == 0){
                $i++;
            }
            if($i >= 101){
                break;
            }
            $num = $freq[$i];
            while($num > 0){
                if($heights[$index] != $i){
                    $count++;
                }
                $num--;
                $index++;
            }
        }
        return $count;  
    }
}
?>