<?php

declare(strict_types=1);

//final class Fiber
//{
//    public function __construct(callable $callback) {}
//    public function start(mixed ...$args): mixed {}
//    public function resume(mixed $value = null): mixed {}
//    public function throw(Throwable $exception): mixed {}
//    public function isStarted(): bool {}
//    public function isSuspended(): bool {}
//    public function isRunning(): bool {}
//    public function isTerminated(): bool {}
//    public function getReturn(): mixed {}
//    public static function getCurrent(): ?self {}
//    public static function suspend(mixed $value = null): mixed {}
//}


$fiber = new Fiber(function (): void {
    $value = Fiber::suspend('fiber');
    echo "Value used to resume fiber: ", $value, "\n";
});

$value = $fiber->start();

echo "Value from fiber suspending: ", $value, "\n";
var_dump($fiber->isRunning());


$fiber->resume('test');

var_dump($fiber->isTerminated());