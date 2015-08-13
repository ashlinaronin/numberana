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

            $teens = array(
                1 => 'eleven',
                2 => 'twelve',
                3 => 'thirteen',
                4 => 'fourteen',
                5 => 'fifteen',
                6 => 'sixteen',
                7 => 'seventeen',
                8 => 'eighteen',
                9 => 'nineteen'
            );

            // before we do anything else, check if input number is zero
            if ($input_number != 0) {
                $digits = str_split($input_number);
                $num_digits = sizeof($digits);

                switch($num_digits) {
                    case 1:
                        // 1, 2, 3, 4, 5, 6, 7, 8, 9
                        $output_string = $oughts[$digits[0]];
                        break;
                    case 2:
                        // 10, 20, 30, 40, 50, 60, 70, 80, 90
                        if ($digits[0] != 0 && $digits[1] == 0) {
                            $output_string = $tens[$digits[0]];

                        }
                        // 22, 33, 44, 55, 66, 77, 88, 99 (not teens!!!)
                        elseif ($digits[0] != 1 && $digits[1] != 0) {
                            $output_string = $tens[$digits[0]] . "-" . $oughts[$digits[1]];
                        }
                        // 11, 12, 13, 14, 15, 16, 17, 18, 19
                        elseif ($digits[0] == 1 && $digits[1] != 0) {
                            $output_string = $teens[$digits[1]];
                        }
                        break;
                    case 3:
                        // 100, 200, 300, 400, 500, 600, 700, 800, 900
                        if ($digits[1] == 0 && $digits[2] == 0) {
                            $output_string = $oughts[$digits[0]] . " hundred";

                        }
                        // 101, 202, 303, 404, 505, 606, 707, 808, 909
                        elseif ($digits[0] != 0 && $digits[1] == 0 && $digits[2] != 0) {
                            $output_string = $oughts[$digits[0]] . " hundred " . $oughts[$digits[2]];
                        } elseif ($digits[0] != 0 && $digits[1] != 0 && $digits[2] != 0) {
                            $output_string = $oughts[$digits[0]] . " hundred " . $tens[$digits[1]] . "-" . $oughts[$digits[2]];
                        }
                        break;
                }


            } else {
                // Input number is any combination of only zeroes, output zero string
                $output_string = "zero";
            }

            return $output_string;
        }


    }


 ?>
