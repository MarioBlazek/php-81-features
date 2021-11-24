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

class Role
{
    public const ADMIN = 'admin';
    public const USER = 'user';
    public const SUPPORT = 'support';

    protected string $role;

    public function __construct(string $role)
    {
        if (!in_array($role, $this->available())) {
            throw new InvalidArgumentException("Not today Sonny!");
        }
        $this->role = $role;
    }

    public function value(): string
    {
        return $this->role;
    }

    protected function available(): array
    {
        return [
            self::ADMIN,
            self::USER,
            self::SUPPORT,
        ];
    }
}

printf("Admin role: ");
var_dump(Role::ADMIN);

$adminRole = new Role(Role::ADMIN);
$pero = new User($adminRole);
printf("Pero's role: ");
var_dump($pero->getRole()->value());

$nicolas = new User($adminRole);
printf("Nicolas's role: ");
var_dump($nicolas->getRole()->value());

printf("Role comparison: ");
var_dump($pero->getRole() === $nicolas->getRole());