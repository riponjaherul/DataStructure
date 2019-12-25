<?php
class PalindromeInteger{
     /**
     * @PalinDrome Problem
     * @input : 121 (Output will be same input else it will be false)
     */
    #---------Solution 1---------------
    /**
     * @param Integer $x
     * @return Boolean
     * Time Complexity : O(n) [Run for loop for whole number]
     * Space Complexity : O(1) [For only one variable]
     */
    public function isPalindrome(int $x=null):bool{
        /**
         * 1. Negative number is not planeDrome
         * 2. If number Last value is 0 and number not equal 0 
         * 3. Then it is not palindrome number (Ex. 0,1,2.. is Palindrome number)
         */
        if($x<0 || ($x%10===0 && $x!=0)){
            return false;
        }
        /**
         * Run for loop and check First value and Last value (By accending Order)
         * If value does not matched then return false
         */
        $length = strlen($x);
        for($i=0; $i<$length; $i++){
            if(substr($x,$i,1) != substr($x,($length-1)-$i,1)){
                return false;
            }
        }
        return true;
    }

    #---------Solution 2---------------
    /**
     * @param Integer $x
     * @return Boolean
     * Time Complexity : O(log10​(n)) [Divided input into two parts]
     * Space Complexity : O(1) [For only one variable]
     */
    public function isPalindrome(int $x=null):bool{
        /**
         * 1. Negative number is not planeDrome
         * 2. If number Last value is 0 and number not equal 0 
         * 3. Then it is not palindrome number (Ex. 0,1,2.. is Palindrome number)
         */
        if($x<0 || ($x%10===0 && $x!=0)){
            return false;
        }
        /**
         * We devided number by two parts 
         * which contain $x=first Part and $reverse = Second Parts
         */
        $reverse = 0;
        while($x > $reverse){
            $reverse = $reverse*10 + $x%10;
            $x = (int)($x/10);
        }
        /**
         * 1. If Two parts are same then return true
         * 2. For odd number(121) the we escape middle of the digit 
         */
        return $x===$reverse || $x===(int)($reverse/10);
    }
}