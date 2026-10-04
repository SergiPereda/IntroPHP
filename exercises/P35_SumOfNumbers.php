<?php

class P35_SumOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $counter = 0;
        while (true) {
            echo "Give a number:";
            $num = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            $counter += $num;

            if ($num === 0) {              
                echo "Sum of the numbers: " . $counter;
                break;
            }
        }
       
    }
}
