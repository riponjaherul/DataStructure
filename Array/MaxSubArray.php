<?php
class MaxSubArray{
	/**
     * @Descrition : Maximum Subarray [The Kadane’s Algorithm]
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        /**
         * 1. Declare $sum = $max = $nums[0];
         * 2. Run for loop (1-n)
         * 3. $sum += $arr[$i];
         * 4. ($sum<0$arr[$i])? $sum = $arr[$i];
         * 5. ($sum>$max)? $max = $sum;
         * 6. End Loop
         * 7. Return $max
         */
        $sum = $max = $nums[0];
        for($i=1; $i<count($nums); $i++){
            $sum += $nums[$i];
            if($sum<$nums[$i]) $sum = $nums[$i];
            if($sum>$max) $max = $sum;
        }
        return $max;
    }
}