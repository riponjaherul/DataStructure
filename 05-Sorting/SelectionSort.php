<?php 
/**
 * @Algorithm :
 *      Step 1 − Set MIN to location 0
 *      Step 2 − Search the minimum element in the list
 *      Step 3 − Swap with value at location MIN
 *      Step 4 − Increment MIN to point to next element
 *      Step 5 − Repeat until list is sorted
 */

class SelectionSort{
    /**
     * @Description : Selection sort for Acending Order
     * @param unsorted Array
     * @return Acending Sorted Array
     */
    public function sorting(array $arr):array{
        $length = count($arr);
        for($i=0; $i<$length-1; $i++){
            // AS Step 1, Set Min = 0;
            $min = $i;
            for($j=$i+1; $j<$length; $j++){
                // As Step 2, Compare MIN with rest of value
                if($arr[$j]<$arr[$min]){
                    $min = $j;
                }
            }
            // As Step 3, If found New MIN then swap
            if($min !== $i){
                $temp = $arr[$min];
                $arr[$min] = $arr[$i];
                $arr[$i] = $temp;
            }
            // Then repeat this loop
        }
        return $arr;
    }
    /**
     * @Time Complexity :  [O(n)]
     * @Space Complexity : [O(1)]
     */

}