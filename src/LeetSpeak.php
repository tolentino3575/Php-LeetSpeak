<?php
    class LeetSpeak
    {
        function toLeetSpeak($input_string)
        {
            $string_to_array = str_split($input_string);
            $new_array = array();

            foreach($string_to_array as $character)
                {
                if ($character == "e" || $character == "E"){
                    array_push($new_array, "3");
                }
                elseif ($character == "o" || $character == "O")
                {
                    array_push($new_array, "0");
                }
                else
                {
                    array_push($new_array, $character);
                }
            }

            $new_string = implode("", $new_array);

            return $new_string;

        }

    }
?>
