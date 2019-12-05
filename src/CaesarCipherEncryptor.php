<?php
/**
 * Time Complexity: O(n)
 * Space Complexity: O(n)
 */
namespace Src\Algorithm;

class CaesarCipherEncryptor
{
    const MAXIMUM_UNICODE = 122;
    const MINIMUM_UNICODE = 96;
    public function encrypt(string $word, $steps) {
        $newWord = [];
        for($i = 0; $i < strlen($word); $i++) {
            $newCharacter = ord($word[$i]) + 2;
            if ($newCharacter > self::MAXIMUM_UNICODE) {
                $newCharacter = self::MINIMUM_UNICODE + $newCharacter % self::MAXIMUM_UNICODE;
            }

            $newWord[] = chr($newCharacter);
        }

        return join('', $newWord);
    }
}