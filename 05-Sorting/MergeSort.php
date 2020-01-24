<?php
class MergeSort{
	/**
     * @Description : Divided array by two parts
     * @param unsorted Array
     * @return Acending Sorted Array
     */
    public function sorting(array $arr):array{
        $length = count($arr);
        #if Array length 1 
        if($length===1){
            return $arr;
        }
        /**
         * Get mid value of array and divided array two parts  
         * by using array_slice() php by default function
         */
        $mid = (int) ($length/2);
        $leftArray = $this->sorting(array_slice($arr,0,$mid));
        $rigthArray = $this->sorting(array_slice($arr,$mid));
        return $this->merge($leftArray,$rigthArray);
    }

    /**
     * @Description : Merge two array in single array
     * @param unsorted Array
     * @return Acending Sorted Array
     */
    public function merge(array $leftArray, array $rigthArray):array
    {
        $combined = [];
        $leftIndex = $rightIndex = 0;
        $leftCount = count($leftArray);
        $rightCount = count($rigthArray);
        while($leftIndex<$leftCount && $rightIndex<$rightCount){
            # This block of Code for Acending Order
            if($leftArray[$leftIndex]<$rigthArray[$rightIndex]){
                $combined[] = $leftArray[$leftIndex];
                $leftIndex++;
            }else{
                $combined[] = $rigthArray[$rightIndex];
                $rightIndex++;
            }
            # This block of Code for Decending Order
            if($leftArray[$leftIndex]>$rigthArray[$rightIndex]){
                $combined[] = $leftArray[$leftIndex];
                $leftIndex++;
            }else{
                $combined[] = $rigthArray[$rightIndex];
                $rightIndex++;
            }
        }
        # In left array contain multiple big value than right array
        while($leftIndex<$leftCount){
            $combined[] = $leftArray[$leftIndex];
            $leftIndex++;
        }
        # In Right array contain multiple big value than left array
        while($rightIndex<$rightCount){
            $combined[] = $rigthArray[$rightIndex];
            $rightIndex++;
        }
        return $combined;
    }
	/**
     * @Time Complexity : In this array devided multile parts so Complexity is [O(nlog(n))]
     * @Space Complexity : An array declare for contain array so Complexity is [O(n)]
     */
}