<?php 
include_once 'BinarySearch.php';

class ExponentionalSearch{
    /**
     * @title : Search value by exponentional order
     * @param Sorted Array, Search Variable
     * @return Boolean
     */
    public function search(array $nums ,int $needle=null):bool
    {
        $length = count($nums);
        if($length<1) return false;
        if($nums[0]===$needle) return true;
        $i = 1;
        while($i<$length){
            // If value not found then increment value of $i is exonentional order
            $i *= 2;
        }
        // If low value very close to search value then we process Binary search Algorithm
        $low = (int) ($i/2);
        $high = ($i<$length)?$i:$length;
        $binarySearch = new BinarySearch;
        return $binarySearch->recursiveSearch($nums,$needle,$low,$high);
    }

    // @Time Complexity : The best complexity is O(1) and Average,Wrost case complexity is O(log n)
    // @Space Complexity : The complexity is O(1) [For single variable]
}