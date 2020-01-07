<?php
class BubbleSort{
	/**
     * @title : Acending Bubble Sort
     * @Solution :
     *         1. Run for loop of ($n-1) times
     *         2. Compare loops of ($n-1) times
     * @param unsorted Array
     * @return Acending Sorted Array
     */
    public function ascSorting_formula_1(array $arr){
       $length = count($arr);
       for($i=0; $i<$length-1; $i++){
           for($j=0; $j<$length-1; $j++){
               if($arr[$j] > $arr[$j+1]){
                   $temp = $arr[$j];
                   $arr[$j] = $arr[$j+1];
                   $arr[$j+1] = $temp;
               }
           }
       }
       return $arr;
    }

    /**
     * @title : Decending Bubble Sort [Formula -1]
     * @Solution :
     *         1. Run for loop of ($n-1) times
     *         2. Compare loops of ($n-1) times
     * @param unsorted Array
     * @return Decending Sorted Array
     */
    public function dscSorting_formula_1(array $arr)
    {
        $length = count($arr);
        for($i=0; $i<$length-1; $i++){
            for($j=0; $j<$length-1; $j++){
                if($arr[$j]<$arr[$j+1]){
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $temp;
                }
            }
        }
        return $arr;
    }

     /**
     * @title : Acending Bubble Sort [Formula -2]
     * @Solution :
     *         1. Run for loop of ($n-1) times
     *         2. Compare loops of ($n-1-$i) times [Decreasing]
     * @param unsorted Array
     * @return Acending Sorted Array
     */
    public function ascSorting_formula_2(array $arr)
    {
        $length = count($arr);
        for($i=0; $i<$length-1; $i++){
            for($j=0; $j<$length-1-$i; $j++){
                if($arr[$j]>$arr[$j+1]){
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $temp;
                }
            }
        }
        return $arr;
    }

    /**
     * @title : Decending Bubble Sort [Formula -2]
     * @Solution :
     *         1. Run for loop of ($n-1) times
     *         2. Compare loops of ($n-1-$i) times [Decreasing]
     * @param unsorted Array
     * @return Decending Sorted Array
     */
    public function descSorting_formula_2(array $arr)
    {
        $length = count($arr);
        for($i=0; $i<$length-1; $i++){
            for($j=0; $j<$length-1-$i; $j++){
                if($arr[$j]<$arr[$j+1]){
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $temp;
                }
            }
        }
        return $arr;
    }

    /**
     * @title : Acending Bubble Sort [Formula -3]
     * @Solution :
     *         1. Run for loop of ($n-1) times
     *         2. Compare loops of ($n-1-$i) times [Decreasing]
     *         3. If at any compare does swap value then rest of array is sorted
     * @param unsorted Array
     * @return Acending Sorted Array
     */
    public function ascSorting_formula_3(array $arr)
    {
        $length = count($arr);
        for($i=0; $i<$length-1; $i++){
            $flag = false;
            for($j=0; $j<$length-1-$i; $j++){
                if($arr[$j]>$arr[$j+1]){
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $temp;
                    $flag = true;
                }
            }
            if($flag===false) break;
        }
        return $arr;
    }

    /**
     * @title : Decending Bubble Sort [Formula -3]
     * @Solution :
     *         1. Run for loop of ($n-1) times
     *         2. Compare loops of ($n-1-$i) times [Decreasing]
     *         3. If at any compare does swap value then rest of array is sorted
     * @param unsorted Array
     * @return Decending Sorted Array
     */
    public function descSorting_formula_3(array $arr)
    {
        $length = count($arr);
        for($i=0; $i<$length-1; $i++){
            $flag = false;
            for($j=0; $j<$length-1-$i; $j++){
                if($arr[$j]<$arr[$j+1]){
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $temp;
                    $flag = true;
                }
            }
            if($flag===false) break;
        }
        return $arr;
    }

    // @Time Complexity : The best case complexity is O(n^2) and Wrost case complexity O(n)
    // @Space Complexity : The complexity is O(1) [For constant variable]
}