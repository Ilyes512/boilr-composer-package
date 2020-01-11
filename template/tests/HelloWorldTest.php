<?php

declare(strict_types=1);

namespace Ilyes512\{{camelcase (snakecase Name)}};

use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    /** @test */
    public function itReturnsHelloWorld(): void
    {
        $this->assertEquals((new HelloWorld)->hello(), 'Hello World');
    }
}
