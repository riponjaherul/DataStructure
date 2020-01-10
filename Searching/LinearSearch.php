<?php
class LinearSearch{
    /**
     * @title : Search a number from array 
     * @param Array, Search Variable
     * @return Boolean
     */
    public function search(array $nums,int $var = null):bool
    {
        /**
         * run for loop and if found then return from loop
         */
        for($i=0; $i<count($nums); $i++){
            if($nums[$i]===$var){
                return TRUE;
            }   
        }
        return FALSE;
    }
    // @Time Complexity : The best case complexity is O(1) and Average,Wrost case complexity O(n)
    // @Space Complexity : The complexity is O(1) [For constant variable $i]
}