
<?php
//https://leetcode.com/submissions/detail/390264226/
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