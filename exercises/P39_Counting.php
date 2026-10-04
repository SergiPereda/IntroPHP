<?php

class P39_Counting
{
    public function main(): void
    {
        // Write your program here
        $counter = 0;

        $num = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        for ($i = 0; $i <= $num; $i++) {
            echo $i . "\n";
        }
       
    }
}
