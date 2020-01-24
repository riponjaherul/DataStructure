<?php
class RomanToInteger{
    /**
     * @param String $s
     * @return Integer
     * Time Complexity : O(n) [for Sinle loop]
     * Space Complexity : O(1) [For declare fixed array]
     */
    public function romanToInt(string $s){
        $total = 0;
        $romanValue = ['I'=>1,'V'=>5,'X'=>10,'L'=>50,'C'=>100,'D'=>500,'M'=>1000];
        for($i=0; $i<strlen($s); $i++){
            $first = substr($s,$i,1);
            $last = substr($s,$i+1,1);
            /**
             * Get always ($i+1) value for (IV),(IX)etc value 
             */
            if($last && $romanValue[$first] < $romanValue[$last]){
                $total+=($romanValue[$last]-$romanValue[$first]); 
                $i++;
            }else{
                $total+=$romanValue[$first];
            }
        }
        return $total;
    }
}