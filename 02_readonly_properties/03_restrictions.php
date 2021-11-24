<?php

declare(strict_types=1);

class User
{
    public readonly string $name;
    public readonly string $surname;
    public readonly mixed $gender;
//    public readonly string $age = 0;

    public function __construct(string $name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }

    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }
}

$pero = new User('Pero', 'male');
var_dump($pero->name);
var_dump($pero->gender);

$pero->setSurname('Peric');
//$pero->surname = 'Peric';

//var_dump($pero->surname);



class ImprovedUser
{
    public readonly string $name;
    public readonly int $age;

    public function __construct(string $name, int $age = 0)
    {
        $this->name = $name;
        $this->age = $age;
    }
}


//$pero = new ImprovedUser('Pero');
//var_dump($pero->name);
//var_dump($pero->age);

// things to notice
// no unset
// no covariance, only invariance
// public readonly int|float $prop; -> public readonly int $prop;