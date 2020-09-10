<?php
//https://leetcode.com/problems/last-stone-weight/
class Solution {

    function lastStoneWeight($stones) {
        
       while (1 < count($stones)) {
            rsort($stones, SORT_NUMERIC);
            $outcome = array_shift($stones) - array_shift($stones);
            if (0 < $outcome) array_push($stones, $outcome);
        }
        return $stones[0] ?? 0;
}
}

?>
