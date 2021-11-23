<?php

declare(strict_types=1);

$printer = static function(string $name): string { return "Welcome " . $name; };

$printMethod = Closure::fromCallable($printer);
var_dump($printMethod('Pero'));

$printMethod = $printer(...);
var_dump($printMethod('Nicolas'));




