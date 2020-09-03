<?php
//RemoveElement
//https://leetcode.com/problems/remove-element/submissions/
class RemoveElement {

    function removeElement(&$nums, $val) {
      $i = 0;
        $j = 0;
    while ($j < sizeof($nums)) {
        
    if ($nums[$j] !== $val) {
      $nums[$i] = $nums[$j];
      $i++;
    }
    $j++;
  }
  return $i;   
    }
}
?>