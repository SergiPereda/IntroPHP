<?php

class P37_AverageOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $counterNum = 0;
        $counterSum = 0;

        do {
            echo "Give a number: " . "\n";
            $num = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if ($num === 0) {
                if ($counterSum === 0) {
                    echo "Average of the numbers: 0.0";
                    break;
                } else {
                    $av = $counterSum / $counterNum;              
                    echo "Average of the numbers: " . $av . "\n";
                    break;
                } 
            } else {
                $counterNum++;
                $counterSum += $num;
            }

        } while (true);
       
    }
}
