<?php

declare(strict_types=1);

class User
{
    private Role $role;

    public function __construct(Role $role)
    {
        $this->role = $role;
    }

    public function getRole(): Role
    {
        return $this->role;
    }
}

enum Role
{
    case ADMIN;
    case USER ;
    case SUPPORT;
}

printf("Role value: ");
var_dump(Role::ADMIN);

$pero = new User(Role::ADMIN);
printf("Pero's role: ");
var_dump($pero->getRole());

$nicolas = new User(Role::USER);
printf("Nicolas's role: ");
var_dump($nicolas->getRole());

printf("Role comparison: ");
var_dump($pero->getRole() === $nicolas->getRole());

$role = Role::SUPPORT;
//$role = 'superadmin';
$nikita = new User($role);
printf("Nikita's role: ");
var_dump($nicolas->getRole());

//var_dump(Role::ADMIN->name);
//var_dump(Role::ADMIN === Role::ADMIN);
//var_dump(Role::ADMIN === Role::USER);

// UnitEnum interface
// https://www.php.net/manual/en/class.unitenum.php
//var_dump(Role::cases());