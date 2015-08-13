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

            $input_array = str_split($input_number);
            $input_length = sizeof($input_array);

            // 10, 20, 30, 40, 50, 60, 70, etc -> don't print "zero"
            if ($input_length==2 && $input_array[1] == 0) {
                $output_string = $tens[$input_array[0]];
            }
            // 0, 1, 2, 3, 4, 5, 6, 7, 8, 9 -> print one word
            elseif ($input_length==1) {
                $output_string = $oughts[$input_array[0]];

            // anything else
            } else {
                $output_string = $tens[$input_array[0]] . " " . $oughts[$input_array[1]];
            }

            return $output_string;
        }
    }


 ?>
