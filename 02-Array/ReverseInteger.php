<?php
class ReverseInteger{
    /**
     * Reverse an 32-bit Integer value [Positive or Negatibe]
     * Pop  => ($input%10) 
     * Push => (($output*10)+pop) 
     * [Only for Stack(Last In First Out-LIFO)]
     */
    public function reverse($x){
        $rev = 0;
        while($x!=0){
            $pop = $x%10;
            $x = (int)($x/10);
            if($rev>2147483647/10 || ($rev==2147483647/10 && $pop>7)){
                return 0;
            }
            if($rev<-2147483648/10 || ($rev==-2147483648/10 && $pop<-8)){
                return 0;
            }
            $rev = ($rev*10)+$pop;
        }
        return $rev;
    }
}