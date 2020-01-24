<?php
class HastTableSearch{
    /**
     * @Description : In php hash table, Find value very easy if value are contain in index
     * @param Sorted Array, Search Variable
     * @return Boolean
     */
    public function search(array $nums,int $needle):bool
    {
        // Swap(Index,Value) in $nums array by array_flip function
        $nums = array_flip($nums);
        // Return true, value contain index of array
        return isset($nums[$needle])?true:false;
    }
    // @Time Complexity : The best,Average,Wrost case complexity is O(1) only If condition
    // @Space Complexity : The complexity is O(n) [For array to contain new array]
}