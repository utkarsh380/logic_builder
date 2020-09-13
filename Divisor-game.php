<?php
//https://leetcode.com/problems/divisor-game/
class Solution {

    function divisorGame($N) {
        
          return playGame($N, true);
    }
}
    function playGame($N, $isAlice) {
        
        for ($x = 1; $x < $N; $x++) {
            if ($N % $x == 0) // able to find the number 
            return playGame($N-$x, !$isAlice); // continue play
        }
		
        // went through 0 to N but cannot find the number,
		//the person on turn is losing
        return !$isAlice;
    }
?>