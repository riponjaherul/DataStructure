<?php
class Sqrt{
	/**
     * @param Integer $x
     * @return Integer
     * Time Complexity : O(1) [for Sinle operation]
     * Space Complexity : O(1) [For declare fixed variable(result) ]
     */
    function mySqrt($x) {
        if($x<1 || $x>2147483647){
            throw new InvalidArgumentException("No Solution");
        }
        $result = (int)sqrt($x);
        return $result;
    }
}