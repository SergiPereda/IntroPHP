<?php

class P38_AverageOfPositiveNumbers
{
    public function main(): void
    {
        // Write your program here
        $counterNum = 0;
        $counterSum = 0;

        do {
            echo "Give a number: " . "\n";
            $num = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if ($num === 0) {
                if ($counterSum === 0) {
                    echo "Cannot calculate the average ";
                    break;
                } else {
                    $av = $counterSum / $counterNum;              
                    echo "Average of the numbers: " . $av . "\n";
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
