<?php

declare(strict_types=1);

class WelcomePrinter
{
    public static function print(string $name): string
    {
        return "Welcome " . $name;
    }
}

$printMethod = Closure::fromCallable([WelcomePrinter::class, 'print']);
var_dump($printMethod('Pero'));

$printMethod = WelcomePrinter::print(...);
var_dump($printMethod('Nicolas'));

