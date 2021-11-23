<?php

declare(strict_types=1);

class User
{
    private Role $role;
    private Status $status;

    public function __construct(Role $role, Status $status)
    {
        $this->role = $role;
        $this->status = $status;
    }

    public function getRole(): Role
    {
        return $this->role;
    }

    public function getStatus(): Status
    {
        return $this->status;
    }
}

enum Role: string
{
    case ADMIN = 'admin';
    case USER = 'user';
    case SUPPORT = 'support';
}

enum Status: int
{
    case ACTIVE = 1;
    case DEACTIVATED = 0;
}

printf("Role enum: \n");
var_dump(Role::ADMIN);
var_dump(Role::ADMIN->name);
var_dump(Role::ADMIN->value);

printf("Status value: \n");
var_dump(Status::ACTIVE);
var_dump(Status::ACTIVE->name);
var_dump(Status::ACTIVE->value);

$pero = new User(Role::ADMIN, Status::DEACTIVATED);
printf("Pero: \n");
var_dump($pero->getRole());
var_dump($pero->getStatus());


// BackedEnum interface
// https://www.php.net/manual/en/class.backedenum.php
//var_dump(Role::from('support'));
//var_dump(Role::from('superuser'));

//var_dump(Role::tryFrom('support'));
//var_dump(Role::tryFrom('superuser'));