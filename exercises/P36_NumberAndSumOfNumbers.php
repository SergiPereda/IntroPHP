<?php

class P36_NumberAndSumOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $counterNum = -1;
        $counterSum = 0;
        while (true) {
            echo "Give a number:";
            $num = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            $counterNum++;
            $counterSum += $num;

            if ($num === 0) {              
                echo "Number of numbers: " . $counterNum;
                echo "Sum of the numbers: " . $counterSum;
                break;
            }
        }
       
    }
}
