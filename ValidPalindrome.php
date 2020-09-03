<?php
class ValidPalindrome {
    //https://leetcode.com/submissions/detail/390295978/
    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {

        $string = str_replace(' ', '', $s);
        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
            $string = strtolower($string); 
            $reverse = strrev($string);
            
            if($string == $reverse){
             
                return true;
            }else{
         
            return false;
            }
        }
    }
?>