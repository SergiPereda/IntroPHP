<?php

class P22_GradesAndPoints
{
    public function main(): void
    {
        // Write your code here
        echo "Give points [0-100]:";

        $num = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ((int)$num < 0) {
            echo "Grade: impossible!";
        } else if ((int)$num >= 0 && $num <= 49) { 
            echo "Grade: failed";
        } else if ((int)$num >= 50 && $num <= 59) {
            echo "Grade: 1";
        } else if ((int)$num >= 60 && $num <= 69) {
            echo "Grade: 2";
        } else if ((int)$num >= 70 && $num <= 79) {
            echo "Grade: 3";
        } else if ((int)$num >= 80 && $num <= 89) {
            echo "Grade: 4";
        } else if ((int)$num >= 90 && $num <= 100) {
            echo "Grade: 5";
        } else if ((int)$num > 100) {
            echo "Grade: incredible!";
        }
        
    }
}
