<?php

class P29_GiftTax
{
    public function main(): void
    {
        // Write your code here
        echo "Value of the gift??";

        $val = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($val >= 5000 && $val < 25000) {
            $op1 = 100 + ($val - 5000) * 0.08;
            echo "Tax: " . $op1;
        } else if ($val >= 25000 && $val < 55000) {
            $op2 = 1700 + ($val - 25000) * 0.10;
            echo "Tax: " . $op2;
        } else if ($val >= 55000 && $val < 200000) {
            $op3 = 4700 + ($val - 55000) * 0.12;
            echo "Tax: " . $op3; 
        } else if ($val >= 200000 && $val < 1000000) {
            $op4 = 22100 + ($val - 200000) * 0.15;
            echo "Tax: " . $op4;
        } else if ($val >= 1000000) {
            $op5 = 142100 + ($val - 1000000) * 0.17;
            echo "Tax: " . $op5;
        } else {
            echo "No tax!";
        }
       
    }
}
