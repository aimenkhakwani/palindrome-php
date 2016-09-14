<?php
    require_once 'src/Palindrome.php';

    class PalindromeTest extends PHPUnit_Framework_TestCase
    {
        function test_evaluate_return()
        {
            $test_Palindrome = new Palindrome;
            $input = "goop";
            $result = $test_Palindrome->evaluate($input);
            $this->assertEquals(false, $result);
        }

        function test_evaluate_palindrome()
        {
            $test_Palindrome = new Palindrome;
            $input = "mom";
            $result = $test_Palindrome->evaluate($input);
            $this->assertEquals(true, $result);
        }

        function test_evaluate_words()
        {
            $test_Palindrome = new Palindrome;
            $input = "hello olleh";
            $result = $test_Palindrome->evaluate($input);
            $this->assertEquals(true, $result);
        }


        function test_evaluate_integers()
        {
            $test_Palindrome = new Palindrome;
            $input = 101;
            $result = $test_Palindrome->evaluate($input);
            $this->assertEquals(true, $result);
        }
    }
?>
