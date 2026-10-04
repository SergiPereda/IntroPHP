<?php

use function PHPUnit\Framework\countOf;

class P33_NumberOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $counter = 0;
        while (true) {
            echo "Give a number:";
            $num = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            $counter++;

            if ($num === 0) {
                $counter--;               
                echo "Number of numbers: " . $counter;
                break;
            }
        }
        
    }
}
