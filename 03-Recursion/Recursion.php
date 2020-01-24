<?php
class Recursion{
	/**
     * Linear Recursion : Function Call itself once run
     * Example : 5! = 5*4*3*2*1
     * @param Integer $x
     * @return Integer
     * Time Complexity : O(n) [For Linear Recursion]
     * Space Complexity : No
     */
    public function factorial(int $n=null):int{
        if($n==0){
            return 1;
        }
        return $n * $this->factorial($n-1);
    }

     /**
     * @Binary Recursion : Function divided by two function 
     *              by each run. So the results depends on two function result
     * @example : 0,1,1,2,3,5,8,13,21,34,55......etc
     * @param Integer $x
     * @return Integer
     * @Time Complexity : O(Log n) [For divided function by two of each run,
     *                              So $n divded multiple times]
     * Space Complexity : No
     */
    public function fibonacci(int $n):int{
        if($n==0){
            return 0;
        }
        if($n==1){
            return 1;
        }
        return $this->fibonacci($n-1) + $this->fibonacci($n-2);
    }

    /**
     * @Tail Recursion : Looking final answer until result not found
     * @example : GCD(1701,3768)
     *            Step 1 : 3768 = (1701*2) + 366
     *            Step 2 : 1701 = (366*4) + 237
     *            Step 3 : 366 = (237*1) + 129
     *            Step 4 : 237 = (129*1) + 108
     *            Step 5 : 129 = (108*1) + 21
     *            Step 6 : 108 = (21*5) + 3
     *            Step 7 : 21 = (3*7) + 0
     *       In Step 7 reminder = 0, SO Gratest Common Divisior is 3(Which is remider of step 6) 
     * @param Integer $x
     * @return Integer
     * @Time Complexity : O(n) [Its depends on $n, how many time run this function]
     * Space Complexity : No
     */
    public function gcd(int $a, int $b){
        if($b==0){
            return $a;
        }
        return $this->gcd($b, $a % $b);
    }
}