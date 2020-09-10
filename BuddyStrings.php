<?php
//https://leetcode.com/problems/buddy-strings/

class Solution {

    /**
     * @param String $A
     * @param String $B
     * @return Boolean
     */
    function buddyStrings($A, $B) {
        
         if (strlen($A)<2 OR strlen($B)<2 OR strlen($A) != strlen($B))
            return false;
        
        if ($A == $B) {
            //$A == $B
            $checked = array ();
            for ($i=0;$i < strlen($A); $i++ ) {
                if (in_array ($A[$i], $checked) )
                    return true;
                $checked[] = $B[$i];
            }
            return false;
            
        } else {
            //$A != $B
           $unmatched = array();
           $unmatched_count = 0;

            for ($i=0;$i < strlen($A); $i++ ) {
                if ($A[$i]!=$B[$i]) {
                    $unmatched[] = $i;
                    $unmatched_count++;
                }

                if ($unmatched_count > 2)
                    return false;
            }

            if ($unmatched_count < 2) 
                return false;  
            
            $result = (
                ($A[$unmatched[0]] == $B[$unmatched[1]]) 
                AND
                ($A[$unmatched[1]] == $B[$unmatched[0]])
                );
            return $result;
        }
    }
}

?>