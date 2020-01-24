<?php 
class TwoSumInteger{
    /**
     * 1. An Integer Array
     * 2. Return indices of the two numbers such that they add up to a specific target
     * 3. Not use the same element twice
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */
    public function twoSum(array $numbers,int $target):array{
        $flipNumber = array_flip($numbers);
        for($i=0;$i<count($numbers);$i++){
            $temp = $target-$numbers[$i];
            if(isset($flipNumber[$temp]) && ($flipNumber[$temp]!==$i)){
                return [$i,$flipNumber[$temp]];
                break;
            }
        }
        throw new InvalidArgumentException("No Solution");
    }
}