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
    }

 ?>
