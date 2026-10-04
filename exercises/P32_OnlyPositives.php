<?php

class P32_OnlyPositives
{
    public function main(): void
    {
        // Write your code here
        while (true) {
            echo "Give a number: ";
            $num = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            if ($num > 0) {
                echo pow($num, 2);
            }

            if ($num < 0) {
                echo "Unsuitable number ";
            }

            if ($num === 0) {
                break;
            }
        }
       
    }
}
