<?php
class ExcelSheetColumnTitleToInteger{
	/**
     * @param String $s
     * @return Integer
     * Equation = (NumberOfLetter ^ (StringLength-1)) * LetterValue
	 * Time Complexity : O(n) [for Recursion]
     * Space Complexity : O(1) [For declare fixed variable]
     */
    function convertToTitle($n) {
        $letterArray = array_flip(['A','B','C','D','E','F','G','H','I','J','K','L','M',
        'N','O','P','Q','R','S','T','U','V','W','X','Y','Z']);
        $first = substr($s,0,1);
        $n = strlen($s);
        if($n<1){
            return false;
        }
        $length = count($letterArray);
        $output = pow($length,$n-1) * ($letterArray[$first]+1);
        return $this->convertToInteger(substr($s,1))+$output;
    }
}