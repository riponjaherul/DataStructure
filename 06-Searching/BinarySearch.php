<?php
class BinarySearch{
     /**
     * @title : Search a number from array [Iteration Process]
     * @param Sorted Array, Search Variable
     * @return Boolean
     */
    public function search(array $nums,int $needle=null):bool
    {
        $low = 0;
        $high = count($nums)-1;
         /**
         * If Low Index greather than High Index than leave from loop
         */
        while($low<=$high){
            $mid = (int) (($low+$high)/2);
            if($nums[$mid]<$needle){
                $low = $mid+1;
            }elseif($nums[$mid]>$needle){
                $high = $mid-1;
            }else{
                return TRUE;
            }
        }
        return FALSE;
    }

    /**
     * @title : Search a number from array [Recersion Process]
     * @param Sorted Array, Search Variable, first Index, Last Index
     * @return Boolean
     */
    public function recursiveSearch(array $nums,int $needle, int $low=null,int $high=null):bool
    {
        if($low>$high){
            return false;
        }
        $mid = (int) (($low+$high)/2);
        if($nums[$mid]<$needle){
            return $this->recursiveSearch($nums,$needle,$mid+1,$high);
        }elseif($nums[$mid]>$needle){
            return $this->recursiveSearch($nums,$needle,$low,$mid-1);
        }else{
            return TRUE;
        }
    }

     /**
     * @title : Search a number from array [If array have same number multiple times]
     * @param Sorted Array, Search Variable
     * @return Searched Index
     */
    public function repetitiveSearch(array $nums,int $needle):int
    {
        $low = 0;
        $high = count($nums)-1;
        $firstOccurrence = false;
        /**
         * If Low Index greather than High Index than leave from loop
         */
        while($low<=$high){
            $mid = (int) (($low+$high)/2);
            if($nums[$mid]<$needle){
                $low = $mid+1;
            }elseif($nums[$mid]>$needle){
                $high = $mid-1;
            }else{
                $firstOccurrence = $mid;
                $high = $mid-1;
            }
        }
        return $firstOccurrence;
    }
}