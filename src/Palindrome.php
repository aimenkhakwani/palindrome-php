<?php
    class Palindrome
    {
        function evaluate($input)
        {
            $input = (string) $input;
            $output = "";
            for ($i = 0; $i<strlen($input); $i++) {
                $output = $input[$i] . $output;
            }
            if($output == $input) {
                return true;
            } else {
                return false;
            }
        }
    }

?>
