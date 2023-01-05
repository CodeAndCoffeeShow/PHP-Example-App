<?php

declare(strict_types=1);

namespace Test;

class HelloWorld
{
    /**
    @param string $name
    **/
    public function sayHello(string $name): string
    {
        return 'Hello, ' . $name;
    }
}
