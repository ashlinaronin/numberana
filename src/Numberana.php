<?php


    class Numberana
    {
        function numberToWord($input_number)
        {
            $output_string = "";

            $oughts = array(
                0 =>'zero',
                1 => 'one',
                2 => 'two',
                3 => 'three',
                4 => 'four',
                5 => 'five',
                6 => 'six',
                7 => 'seven',
                8 => 'eight',
                9 => 'nine'
            );

            $tens = array(
                1 => 'ten',
                2 => 'twenty',
                3 => 'thirty',
                4 => 'forty',
                5 => 'fifty',
                6 => 'sixty',
                7 => 'seventy',
                8 => 'eighty',
                9 => 'ninety'
            );

            $digits = str_split($input_number);
            $num_digits = sizeof($digits);

            // 10, 20, 30, 40, 50, 60, 70, 80, 90 -> don't print "zero"
            if ($num_digits == 2 && $digits[1] == 0) {
                $output_string = $tens[$digits[0]];
            }
            // 0, 1, 2, 3, 4, 5, 6, 7, 8, 9 -> print one word
            elseif ($num_digits == 1) {
                $output_string = $oughts[$digits[0]];
            }
            //100, 200, 300, 400, 500, 600, 700, 800, 900 ->three digit numbers
            elseif ($num_digits == 3 && $digits[1] == 0 && $digits[2] == 0) {
                $output_string = $oughts[$digits[0]] . " hundred";
            }

            // anything else
            else {
                $output_string = $tens[$digits[0]] . "-" . $oughts[$digits[1]];
            }

            return $output_string;
        }
    }


 ?>
