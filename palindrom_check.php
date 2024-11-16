<?php
function isPalindrom($palindrom)
{
    $palindrom = strtolower($palindrom);

    for ($i = 0; $i < strlen($palindrom) / 2; $i++) {
        if ($palindrom[$i] !== $palindrom[strlen($palindrom) - $i - 1]) {
            return false;
        }
    }
    return true;
}

$word = "dammad";
if (isPalindrom($word)) {
    echo "$word is a palindrom";
} else {
    echo "$word is not a palindrom";
}