<?php

declare(strict_types=1);

class Test
{
    public function getPrivateMethod(): callable
    {
        return [$this, 'privateMethod'];
//        return Closure::fromCallable([$this, 'privateMethod']);
//        return $this->privateMethod(...);
    }

    private function privateMethod(): string
    {
        return __METHOD__;
    }
}

$test = new Test;
$privateMethod = $test->getPrivateMethod();
var_dump(is_callable($privateMethod));
var_dump($privateMethod());