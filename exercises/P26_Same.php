<?php

class P26_Same
{
    public function main(): void
    {
        // Write your code here
        echo "Enter the first string:";

        $s1 = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        echo "Enter the second string:";

        $s2 = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($s1 === $s2) {
            echo "Same";
        } else {
            echo "Different";
        }
       
    }
}
