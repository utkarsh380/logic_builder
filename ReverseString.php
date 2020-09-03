<?php
//https://leetcode.com/problems/reverse-string/

class ReverseString {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
  
        $j = 0;  $k = sizeof($s) - 1;
        for  ($i=0; $j < $k ;$i++ ) {        
           $tmp = $s[$j];
            $s[$j++] = $s[$k];
            $s[$k--] = $tmp;
        }
 
   }
}
?>
