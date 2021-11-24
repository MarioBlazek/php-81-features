<?php

declare(strict_types=1);

// Array unpacking has been in PHP since PHP 7.4
// But, only arrays with numeric keys were allowed
// string keys weren't supported before is because there wasn't any consensus on how to merge array duplicates
$firstArray = [1, 2, 3];
$secondArray = [4, 5];

$result = [0, ...$firstArray, ...$secondArray, 6, 7];

var_dump($result);

$firstArray = ['a' => 1];
$secondArray = ['b' => 2];

$result = ['a' => 0, ...$firstArray, ...$secondArray];

var_dump($result);
var_dump(array_merge(['a' => 0], $firstArray, $secondArray));

$arrayUnpack = [
    ...['a' => 'foo'],
    ...['b' => 'bar'],
    ...['c' => 'baz']
];
$arrayMerge = array_merge(
    ['a' => 'foo'],
    ['b' => 'bar'],
    ['c' => 'baz'],
);

var_dump($arrayUnpack === $arrayMerge);