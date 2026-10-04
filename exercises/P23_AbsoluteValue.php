<?php

class P23_AbsoluteValue
{
    public function main(): void
    {
        // Write your code here
        // Get input from the user
        $num = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        // Check number value
        if ((int)$num >= 0) {
            echo $num . "\n";
        } else if ((int)$num < 0){
            echo $num * -1 . "\n";
        }
       
    }
}
