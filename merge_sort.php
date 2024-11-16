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

}