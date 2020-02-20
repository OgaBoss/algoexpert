<?php


namespace Src\Algorithm;


class Palindrome
{
    public function detectPalindrome($string): bool {
        $counter = strlen($string);
        $newString = "";
        while($counter > 0) {
            $newString .= $string[$counter - 1];
            $counter--;
        }
        return $newString === $string;
    }
}