<?php
//https://leetcode.com/problems/remove-palindromic-subsequences/
class RemovePalindromeSub {

    function removePalindromeSub($s) {
         if($s == null || sizeof($s) == 0)
            return 0;
        else if(isPalindromic($s))
            return 1;
        else
            return 2;
    }
}    
       function isPalindromic($s) {
           
         $left = 0;
        $right = sizeof($s)-1;
           
        while($left < $right) {
            if($s[$left++] != $s[$right--])
                return false;
        }
        return true;
    }
?>