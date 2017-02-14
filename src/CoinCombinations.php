<?php

    class CoinCombination
    {
        function numberOfQuarters($input)
        {
            $quarters = intval($input / 25);
            return $quarters;
        }
        function numberOfDimes($input)
        {
            $dimes = intval(($input - (intval($input / 25) * 25)) / 10);
            return $dimes;
        }
        function numberOfNickles($input)
        {
            $quarters = intval($input / 25);
            $dimes = intval(($input - (intval($input / 25) * 25)) / 10);
            $nickles = intval(($input - (($quarters * 25) + ($dimes * 10))) / 5);
            return $nickles;
        }
        function numberOfPennies($input)
        {
            $quarters = intval($input / 25);
            $dimes = intval(($input - (intval($input / 25) * 25)) / 10);
            $nickles = intval(($input - (($quarters * 25) + ($dimes * 10))) / 5);
            $pennies = $input - (($quarters * 25) + ($dimes * 10) + ($nickles * 5));
            return $pennies;
        }
    }
?>
