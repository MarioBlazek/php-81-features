<?php

declare(strict_types=1);

class User
{
    public function __construct(
        public readonly string $name
    ) {}
}

$pero = new User('Pero');
var_dump($pero->name);

//$pero->name = 'Nicolas';


