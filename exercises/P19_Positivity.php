<?php

class P19_Positivity
{
    public function main(): void
    {
        // Write your code here
        // Prompt the user for input
        echo "Give a number: ";
       
        // Get input from the user
        $num = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        // Check year value
        if ((int)$num > 0) {
            echo "The number is positive.";
        } else {
            echo "The number is not positive.";
        }
       
    }
}
