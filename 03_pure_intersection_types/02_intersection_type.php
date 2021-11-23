<?php

declare(strict_types=1);

interface Nameable
{
    public function getName(): string;
}

interface Ageable
{
    public function getAge(): int;
}

class Person implements Nameable, Ageable
{
    private string $name;
    private int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}

class User implements Nameable
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

class AddressBook
{
    protected array $entries;

    public function __construct()
    {
        $this->entries = [];
    }

    // remember union type :)
    // Nameable|Ageable
    public function add(Nameable&Ageable $entry): void
    {
        $this->entries[] = [
            'name' => $entry->getName(),
            'age' => $entry->getAge(),
        ];
    }
}

$pero = new Person('Pero', 35);
$nicolas = new User('Niolas');

$addressBook = new AddressBook();
//$addressBook->add($pero);
//$addressBook->add($nicolas);