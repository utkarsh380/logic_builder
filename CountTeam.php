<?php
//https://leetcode.com/problems/count-number-of-teams/
class Solution {  
    function numTeams($rating) {
         $count = 0;
        for ($i =0 ; $i< sizeof($rating) - 2; $i++){
            for($j = $i+1; $j< sizeof($rating) - 1; $j++){
                     $p = $j+1;
                if($rating[$i] > $rating[$j]){
                    for($k = $p; $k< sizeof($rating) ; $k++){
                        if($rating[$j] > $rating[$k])
                            $count++;  
                    }
                } else if($rating[$i] < $rating[$j]){
                      for($k = $p; $k< sizeof($rating) ;$k++){
                        if($rating[$j] < $rating[$k])
                            $count++;
                    }
                }
            }
        }
       
        return $count;
    }
}
?>