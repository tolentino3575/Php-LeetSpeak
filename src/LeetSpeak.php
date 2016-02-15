<?php
    class LeetSpeak
    {
        function toLeetSpeak($input_string)
        {
            $string_to_array = str_split($input_string);

            $new_string = implode("",$string_to_array);

            return $new_string;

        }

    }
?>
