
<?php
//https://leetcode.com/problems/is-subsequence/
class Subsequence {

    function isSubsequence($s, $t) {
    
         if (sizeof($s) == 0)
            return true;

        $i=0;
        $j=0;
        while ($i < sizeof($s) && $j < sizeof($t)) {
            if ($s[$i] == $t[$j]) {
                $i++;
            }
            $j++;
        }
        if($i == sizeof($s))
            return true;
        return false;
    
    }
}
?>
