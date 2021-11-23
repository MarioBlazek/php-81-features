<?php

declare(strict_types=1);

interface RoleInterface
{
    public function getRole(): string;
}

// but without properties
trait Something
{
    public function something(): string
    {
        return "something";
    }
}

enum Role: string #implements RoleInterface
{
//    use Something;

//    public const BEST_ROLE = self::ADMIN;

    case ADMIN = 'admin';
    case USER = 'user';
    case SUPPORT = 'support';

    public function getDescription(): string
    {
        return match ($this) {
            self::ADMIN => 'Curabitur viverra ex in faucibus viverra',
            self::USER => 'Donec egestas, ex non euismod imperdiet, justo purus luctus lacus, in imperdiet nisi neque vitae dolor',
            self::SUPPORT => 'Quisque interdum iaculis quam at consequat',
        };
    }

//    public function getRole(): string
//    {
//        return $this->name;
//    }
}

//var_dump(Role::SUPPORT->getDescription());
//var_dump(Role::ADMIN->getDescription());
//var_dump(Role::USER->getDescription());

//var_dump(Role::SUPPORT->getRole());
//var_dump(Role::ADMIN->getRole());
//var_dump(Role::USER->getRole());

//var_dump(Role::SUPPORT->something());
//var_dump(Role::ADMIN->something());
//var_dump(Role::USER->something());

//var_dump(Role::BEST_ROLE);
//var_dump(Role::class);

// Comparison to objects
// Not allowed
// Constructors - Not relevant without data/state.
// Destructors - Not relevant without data/state.
// Class/Enum inheritance. - Enums are by design a closed list, which inheritance would violate. (Interfaces are allowed, but not parent classes.)
// Enum/Case properties - Properties are a form of state, and enum cases are stateless singletons. Metadata about an enum or case can always be exposed via methods.
// Dynamic properties - Avoid state. Plus, they're a bad idea on classes anyway.
// Magic methods except for those specifically listed below - Most of the excluded ones involve state.
// Cloning of enum cases. Enum cases must be single instances in order to behave predictably.


// Comparison to objects
// Allowed
// Public, private, and protected methods.
// Public, private, and protected static methods.
// Public, private, and protected constants.
// __call, __callStatic, and __invoke magic methods
// __CLASS__ and __FUNCTION__ constants behave as normal