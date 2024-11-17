<?php
function isPalindrom($palindrom)
{
    function toLowerCase($string)
    {
        $result = '';
        for ($i = 0; $i < strlen($string); $i++) {
            $char = $string[$i];
            if ($char >= 'A' && $char <= 'Z') {
                $result .= chr(ord($char) + 32);
            } else {
                $result .= $char;
            }
        }
        return $result;
    }

    $palindrom = toLowerCase($palindrom);


    function stringLength($string)
    {
        $length = 0;
        while (true) {
            if ($string[$length] === null) {
                break;
            }
            $length++;
        }
        return $length;
    }

    for ($i = 0; $i < stringLength($palindrom) / 2; $i++) {
        if ($palindrom[$i] !== $palindrom[stringLength($palindrom) - $i - 1]) {
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
$word = "yhxc";
if (isPalindrom($word)) {
    echo "$word is a palindrom";
} else {
    echo "$word is not a palindrom";
}