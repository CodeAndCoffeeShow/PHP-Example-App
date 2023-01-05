<?php
declare(strict_types=1);

namespace Test;

class HelloWorld
{
    /**
    @param int $name
    **/
    public function sayHello(string $name): void
    {
        return 'Hello, ' . $name;
    }
}
