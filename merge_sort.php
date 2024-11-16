<?php
function mergeSort($arr)
{
    $len = count($arr);
    if ($len <= 1) {
        return $arr;
    }

    $mid = floor(($len) / 2);
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge($left, $right)
{
    $result = [];
    $i = 0;
    $j = 0;

    while ($i < count($left) && $j < count($right)) {
        if ($left[$i] < $right[$j]) {
            $result[] = $left[$i];
            $i++;
        } else {
            $result[] = $right[$j];
            $j++;
        }
    }

    return array_merge($result, array_slice($left, $i), array_slice($right, $j));
}
