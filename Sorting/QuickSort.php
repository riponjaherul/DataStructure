<?php
class QuickSort{
	/**
     * @Description : Get partition Index and devided array by two subarray 
     * @param unsorted Array with reference, First Index, and Last Intex 
     * @return Acending Sorted Array
     */
    public function sorting(array &$arr,$low,$high){
        if($low<$high){
            $pi = $this->partition($arr,$low,$high);
            $this->sorting($arr,0,$pi-1);
            $this->sorting($arr,$pi+1,$high);
        }
        return $arr;
    }

     /**
     * @Description : Partition array by two sub array by Quic Sort Aplication
     * @param unsorted Array with reference, First Index, and Last Intex 
     * @return Sorted array index
     */
    public function partition(array &$arr,$low,$high){
        /**
         * If Last and First index are same then there have one value in 
         * array, So no need to sorting
         */
        if($low===$high){
            return $low;
        }
        # Get Last value of array as Pivot
        $pivot = $arr[$high];
        /**
         * Set $i = $low-1, for decrease $i by one value because new sorting value set after increment
         */
        for($i=$low-1, $j=$low; $j<$high; $j++){
            /**
             * In looping, smaller value of pivot goes on left side
             */
            # For Acending sorting
            if($arr[$j]<$pivot){
                $i++;
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
            # For Decending sorting
            if($arr[$j]>$pivot){
                $i++;
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
        /**
         * After complete loop, Pivot value assigned new index of $i
         */
        $temp = $arr[$i+1];
        $arr[$i+1] = $pivot;
        $arr[$high] = $temp;
        return $i+1;
    }
    /**
     * @Time Complexity : 
     *          1. Wrost case running time : O(n^2)
     *          2. Best case running time : O(n log n)
     *          3. Averae case running time : O(n log n)
     * @Space Complexity :
     *          1. Wrost case space : O(n) [For an stable array divided by two parts and nested recursive call required]
     *          2. Best case running time : O(1)
     *          3. Averae case running time : O(n log n)
     */
}