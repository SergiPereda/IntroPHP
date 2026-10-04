<?php

class P27_CheckingTheAge
{
    public function main(): void
    {
        // Write your code here
       echo "How old are you?";

        $num = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($num >= 0 && $num <= 120) {
            echo "Ok";
        } else {
            echo "Impossible!";
        }
    }
}
