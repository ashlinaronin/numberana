<?php

    require_once __DIR__.'/../src/Numberana.php';

    class NumberanaTest extends PHPUnit_Framework_TestCase
    {
        function test_numberToWord_zero()
        {
            $test_Numberana = new Numberana;
            $input_number = 0;

            $result = $test_Numberana->numberToWord($input_number);

            $this->assertEquals("zero", $result);
        }

        function test_numberToWord_oneDigitNumber()
        {
            $test_Numberana = new Numberana;
            $input_number = 1;

            $result = $test_Numberana->numberToWord($input_number);

            $this->assertEquals("one", $result);
        }

        function test_numberToWord_twoDigitNumber()
        {
            $test_Numberana = new Numberana;
            $input_number = 10;

            $result = $test_Numberana->numberToWord($input_number);

            $this->assertEquals("ten", $result);
        }

        function test_numberToWord_twoDigitNonZero()
        {
            $test_Numberana = new Numberana;
            $input_number = 22;

            $result = $test_Numberana->numberToWord($input_number);

            $this->assertEquals("twenty-two", $result);
        }
    }

 ?>
