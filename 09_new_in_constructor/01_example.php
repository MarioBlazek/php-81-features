<?php

declare(strict_types=1);

interface LoggerInterface
{
    public function log(string $message): void;
}

class NullLogger implements LoggerInterface
{
    public function log(string $message): void
    {
    }
}

class FileLogger implements LoggerInterface
{
    public function log(string $message): void
    {
        // log to file, somewhere
    }
}

class Command
{
    private LoggerInterface $logger;

    public function __construct(?LoggerInterface $logger = null)
    {
        $this->logger = $logger ?? new NullLogger();
    }

    public function execute(): void
    {
        $this->logger->log("Executing...");
    }
}

class Event
{
    public function __construct(private LoggerInterface $logger = new NullLogger()
    ) {}

    public function execute(): void
    {
        $this->logger->log("Executing...");
    }
}

$command = new Command();
$command->execute();

$event = new Event();
//$event = new Event(new FileLogger());
$event->execute();


// All not allowed (compile-time error):
//  function test(
//      $a = new (CLASS_NAME_CONSTANT)(), // dynamic class name
//      $b = new class {}, // anonymous class
//      $c = new A(...[]), // argument unpacking
//      $d = new B($abc), // unsupported constant expression
//  ) {}