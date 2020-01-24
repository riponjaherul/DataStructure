<?php
class NumberToExcelSheetColumnTitle{
	/**
     * @param Integer $n
     * @return String
     * Time Complexity : O(n) [for Recursion]
     * Space Complexity : O(1) [For declare fixed variable ]
     */
    function convertToTitle($n) {
        $title = null;
        $letterArray = ['A','B','C','D','E','F','G','H','I','J','K','L','M',
                        'N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
        $length =  count($letterArray);
        if($n<=$length) return $letterArray[$n-1];
        $remainder = $n%$length;
        $n = (int)($n/$length);
        $n = ($remainder==0)?$n-1:$n;
        $remainder = ($remainder==0)?25:$remainder-1;
        return $this->convertToTitle($n).$letterArray[$remainder];
    }
}