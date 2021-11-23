<?php

declare(strict_types=1);

$strlen = Closure::fromCallable('strlen');
var_dump($strlen('First-class callables'));

$strlen = strlen(...);
var_dump($strlen('First-class callables'));


