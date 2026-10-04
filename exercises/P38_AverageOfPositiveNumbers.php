<?php

class P38_AverageOfPositiveNumbers
{
    public function main(): void
    {
        // Write your program here
        $counterNum = 0;
        $counterSum = 0;

        do {
            echo "Give a number:";
            $num = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if ($num === 0) {
                if ($counterSum === 0) {
                    echo "Average of the numbers: 0.0";
                } else {
                    $av = $counterSum / $counterNum;              
                    echo "Average of the numbers: " . $av;
                    break;
                } 
            } else {
                if ($num > 0) {
                    $counterNum++;
                    $counterSum += $num;
                }
                
            }

        } while (true);
       
    }
}
