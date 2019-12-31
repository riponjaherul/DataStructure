<?php
class IntegerToRoman{
    /**
     * @param Integer $num
     * @return String
     * Time Complexity : O(n) [for While loop]
     * Space Complexity : O(1) [For declare Single String]
     */
    public function IntToRoman(int $num){
        $output = null;
        while($num>0){
            if($num>=1000){
                $output .= 'M';
                $num -= 1000;
            }elseif($num>=900){
                $output .= 'CM';
                $num -= 900;
            }elseif($num>=500){
                $output .= 'D';
                $num -= 500;
            }elseif($num>=400){
                $output .= 'CD';
                $num -= 400;
            }elseif($num>=100){
                $output .= 'C';
                $num -= 100;
            }elseif($num>=90){
                $output .= 'XC';
                $num -= 90;
            }elseif($num>=50){
                $output .= 'L';
                $num -= 50;
            }elseif($num>=40){
                $output .= 'XL';
                $num -= 40;
            }elseif($num>=10){
                $output .= 'X';
                $num -= 10;
            }elseif($num>=9){
                $output .= 'IX';
                $num -= 9;
            }elseif($num>=5){
                $output .= 'V';
                $num -= 5;
            }elseif($num>=4){
                $output .= 'IV';
                $num -= 4;
            }elseif($num>=1){
                $output .= 'I';
                $num -= 1;
            }
        }
        return $output;
    }
}