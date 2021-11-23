<?php

declare(strict_types=1);

function aValidVoid(): void
{
    return;
}

function anExampleNever(): never
{
    printf("Printing from function with never return type");
    exit();
}

function eitherTerminateOrThrowAnException(): never
{
    printf("Should we continue?");
//    die();
    throw new Exception('Excepcionel');
}


aValidVoid();
anExampleNever();
//eitherTerminateOrThrowAnException();