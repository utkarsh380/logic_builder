<?php
//https://leetcode.com/submissions/detail/389406752/
class PowerOfThree{
function isPowerOfThree($n) {
     if($n==1) return true;
$result = false;
while($n>0){
 $m = $n%3;
  if($m==0){
    $n=$n/3;
  if($n==1)
    return true;
    }else{
    return false;
    }
 }
    return $result;
}
}
?>