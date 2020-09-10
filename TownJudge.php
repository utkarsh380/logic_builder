<?php
//https://leetcode.com/problems/find-the-town-judge/
class Solution {

    function findJudge($N, $trust) {
       	$count= array($N+1);
    	foreach ($trust as &$t)
    	{
    		$count[$t[0]]--;
    		$count[$t[1]]++;
    	}
    	for($i=1; $i<=$N; $i++)
    		if($count[$i]==$N-1)
    			return $i;
    	return -1;
    }
}
?>