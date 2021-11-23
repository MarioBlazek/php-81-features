<?php

declare(strict_types=1);

class User
{
    public readonly string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

$pero = new User('Pero');
var_dump($pero->name);

$pero->name = 'Nicolas';


