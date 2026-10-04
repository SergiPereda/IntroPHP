<?php

class P24_OddOrEven
{
    public function main(): void
    {
        // Write your code here
        // Get input from the user
        echo "Give a number: " . "\n";

        $num = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        
        // Check number value
        if ((int)$num % 2 == 0) {
            echo "Number is even." . "\n";
        } else {
            echo "Number is odd." . "\n";
        }
    }
}
