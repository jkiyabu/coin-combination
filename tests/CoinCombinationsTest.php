<?php

    require_once "src/CoinCombinations.php";

    class CoinCombinationsTest extends PHPUnit_Framework_TestCase
    {

        function test_numberOfQuarters()
        {
            //Arrange
            $test_CoinCombination = new CoinCombination;
            $input = 132;

            //Act
            $result = $test_CoinCombination->numberOfQuarters($input);

            //Assert
            $this->assertEquals(5, $result);
        }

        function test_numberOfDimes()
        {
            //Arrange
            $test_CoinCombination = new CoinCombination;
            $input = 132;

            //Act
            $result = $test_CoinCombination->numberOfDimes($input);

            //Assert
            $this->assertEquals(0, $result);
        }

        function test_numberOfNickles()
        {
            //Arrange
            $test_CoinCombination = new CoinCombination;
            $input = 135;

            //Act
            $result = $test_CoinCombination->numberOfNickles($input);

            //Assert
            $this->assertEquals(0, $result);
        }

        function test_numberOfPennies()
        {
            //Arrange
            $test_CoinCombination = new CoinCombination;
            $input = 132;

            //Act
            $result = $test_CoinCombination->numberOfPennies($input);

            //Assert
            $this->assertEquals(2, $result);
        }
    }

?>
