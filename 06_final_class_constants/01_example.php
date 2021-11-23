<?php

declare(strict_types=1);

class Role
{
    final public const ADMIN = 'admin';
    public const USER = 'user';
//    final private const SUPPORT = 'support';
}

class SymfonyRole extends Role
{
    public const USER = 'ROLE_USER';
//    public const ADMIN = 'ROLE_ADMIN';
}

var_dump(SymfonyRole::USER);
var_dump(SymfonyRole::ADMIN);