<?php
//https://leetcode.com/problems/day-of-the-week/
class DayOfTheWeek {

    function dayOfTheWeek($day, $month, $year) {
   
       $months=array(0,31,28,31,30,31,30,31,31,30,31,30,31);
        $days=array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
        $sum=4;
        for($i=1971;$i<$year;$i++){
            if($i%4==0)
                $sum++;
                $sum+=365;
        }
        for($i=1;$i<$month;$i++){
            if($i==2 && $year%4==0)
                $sum++;
            $sum+=$months[$i];
        }
        $sum+=$day;
        return $days[$sum%7]; 
    }
}
?>
