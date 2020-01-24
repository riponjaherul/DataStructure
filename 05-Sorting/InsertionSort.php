<?php
/**
 * @Algorithm
 *      Step 1 − If it is the first element, it is already sorted. return 1;
 *      Step 2 − Pick next element
 *      Step 3 − Compare with all elements in the sorted sub-list
 *      Step 4 − Shift all the elements in the sorted sub-list that is greater 
 *               than the value to be sorted
 *      Step 5 − Insert the value
 *      Step 6 − Repeat until list is sorted
 */
class InsertionSort{
    public function sorting(array $arr):array{
        /**
         * Start loop from 1, because $arr[0] is already sorted
         */
        for($i=1; $i<count($arr); $i++){
            // Get first value of unsorted array set in temp variable
            $temp = $arr[$i];
            $j = $i-1;
            // After decreasing value of j and check array value and temp value for swap
            while($j>=0 && $arr[$j]>$temp){
                $arr[$j+1] = $arr[$j];
                $j--;
            }
            // Find the location of hole and insert $temp value 
            $arr[$j+1] = $temp;
        }
        return $arr;
    }
    /**
     * @Time Complexity :  [O(n)]
     * @Space Complexity : [O(1)]
     */
}