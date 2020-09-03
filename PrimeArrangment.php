<?php
//https://leetcode.com/problems/prime-arrangements/
class Solution {
     function numPrimeArrangements($n) {
         
     $primes = array(2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97);
     $t= 0;
     while($t<sizeof($primes) && $primes[$t]<=$n){
         $t++;
     }
     $ans = 1;
     for($i=2;$i<=($n-$t);$i++){
         $ans = ($ans * $i)%1000000007;
     }
     for($i=2;$i<=$t;$i++){
         $ans = ($ans * $i)%1000000007;
     }
     return (int)$ans;
 }
 }
 ?>