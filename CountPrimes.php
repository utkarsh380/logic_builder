
<?php
//https://leetcode.com/problems/count-primes/
class CountPrimes {

    function countPrimes($n) {
        $start=2;
         $val=0;
     for($i = $start ; $i <= $n ; $i++)
		{
			$count = 0;
			for($j = 1 ; $j <= $i ; $j++)	
			{
				if($i % $j == 0)
					$count = $count+1;
			}
			if($count == 2)
			 $val=$val+1; 
		}
        return $val;
    }
}
?>