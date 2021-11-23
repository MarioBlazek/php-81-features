<?php

declare(strict_types=1);

class WelcomePrinter
{
    public function print(string $name): string
    {
        return "Welcome " . $name;
    }
}

$printer = new WelcomePrinter();

$printMethod = Closure::fromCallable([$printer, 'print']);
var_dump($printMethod('Pero'));

$printMethod = $printer->print(...);
var_dump($printMethod('Nicolas'));

