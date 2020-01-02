<?php
class ArrangingCoins{
	/**
     * @description : Given n, find the total number of full staircase rows that can be formed.
     * @param Integer $n
     * @return Integer
     * Time Complexity : O(n) [for Loop]
     * Space Complexity : O(1) [For declare fixed variable ]
     */
    function arrangeCoins($n) {
        if($n<0 || $n>2147483647){
            return false;
        }
        $step = 0;
        $count = 1;
        for($i=1; $i<=$n; $i+=$count){
            $count++;
            $step++;
        }
        return $step;
    }
}