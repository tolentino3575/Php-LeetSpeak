<?php
    class LeetSpeak
    {
        function toLeetSpeak($input_string)
        {
            $string_to_array = str_split($input_string);
            // var_dump($string_to_array);

            $new_array = array();
            $i=0;

            foreach($string_to_array as $character)
                {
                if ($character == "e" || $character == "E"){
                    array_push($new_array, "3");
                }
                elseif ($character == "o" || $character == "O")
                {
                    array_push($new_array, "0");
                }
                elseif ($character == "L" )
                {
                    array_push($new_array, "1");
                }
                elseif ( $character == "s" || $character == "S")
                {
                    if ($i == 0 || $string_to_array[$i-1] == " "){
                        array_push($new_array, $character);
                    }
                    else {
                        array_push($new_array, "z");
                    }
                }

                else
                {
                    array_push($new_array, $character);
                }
                    ++$i;
            }

            $new_string = implode("", $new_array);

            return $new_string;

        }

    }
?>
