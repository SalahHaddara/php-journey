<?php
function isPalindrom($palindrom)
{
    for ($i = 1; $i < strlen($palindrom) / 2; $i++) {
        if ($palindrom[$i] !== $palindrom[strlen($palindrom) - $i]) {
            return false;
        }
        return true;
    }
}