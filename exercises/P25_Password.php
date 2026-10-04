<?php

class P25_Password
{
    public function main(): void
    {
        // Write your code here
        echo "Password?";

        $passwd = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($passwd === "Caput Draconis") {
            echo "Welcome!";
        } else {
            echo "Off with you!";
        }
       
    }
}
