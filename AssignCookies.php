<?php
//https://leetcode.com/problems/assign-cookies/
class Solution {
    
    function findContentChildren($g, $s) {
        sort($g);
        sort($s);
        $num = sizeof($g);
        $k = 0;
        $res = 0; 
        for($i = 0; $i < $num; $i++) {
            while($k < sizeof($s) && $s[$k] < $g[$i]) $k++;
            if($k < sizeof($s) && $s[$k] >= $g[$i]) {
                $res++;
                $k++;
            }
        }
        return $res;

    }
}
?>