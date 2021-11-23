<?php

declare(strict_types=1);

class User
{
    private string $role;

    public function __construct(string $role = Role::USER)
    {
//        if (!in_array($role, Role::available())) {
//            throw new InvalidArgumentException("Not today Sonny!");
//        }
        $this->role = $role;
    }

    public function getRole(): string
    {
        return $this->role;
    }
}

class Role
{
    public const ADMIN = 'admin';
    public const USER = 'user';
    public const SUPPORT = 'support';

//    public static function available(): array
//    {
//        return [
//            self::ADMIN,
//            self::USER,
//            self::SUPPORT,
//        ];
//    }
}

printf("Role value: ");
var_dump(Role::ADMIN);

$pero = new User();
printf("Pero's role: ");
var_dump($pero->getRole());

$nicolas = new User(Role::ADMIN);
printf("Nicolas's role: ");
var_dump($nicolas->getRole());

$nikita = new User('superuser');
printf("Nikita's role: ");
var_dump($nikita->getRole());

printf("Role comparison: ");
var_dump($pero->getRole() === $nicolas->getRole());