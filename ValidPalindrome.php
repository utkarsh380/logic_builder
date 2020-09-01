<?php
class ValidPalindrome {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
     if (strrev($s) == $s){   

        return true;  
    } 
    else{ 
        
        return false; 
    } 
    }
}
?>