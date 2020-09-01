<?php
class CountPrimes {

    function countPrimes($n) {
        $count=0;

       for($number = 2; $number<=$n; $number++){
            if(isPrime($number)){
                $count++; 
            }
        }
        return $count;
    }
     function isPrime($number){
        for($i=2; $i<$number; $i++){
            if($number%i == 0){
                return false; 
            }
        }
        return true; 
    }
}
?>