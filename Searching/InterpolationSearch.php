<?php
class InterpolationSearch{
     /**
     * @title : The value of $mid is very close to search value, So it is too easy find the 
     *          Excat value as Minimum search
     * @param Array, Search Variable
     * @return Boolean
     */
    public function search(array $nums ,int $needle=null):bool
    {
        $low = 0;
        $high = count($nums)-1;
        while($low<=$high){
            /**
             * This is Equation of Interpolation Search [For Sorted Array]
             */
            $mid = $low + ($needle-$nums[$low])*($high-$low)/($nums[$high]-$nums[$low]);
            if($nums[$mid]>$needle){
                $low = $mid+1;
            }elseif($nums[$mid]<$needle){
                $high = $mid-1;
            }else{
                return true;
            }
        }
        return false;
    }

    // @Time Complexity : The best complexity is O(1) [value matched first time]
    //                    Average,Wrost case complexity is O(log n) [If it uniformly distributed]
    // @Space Complexity : The complexity is O(1) [For single variable]
}