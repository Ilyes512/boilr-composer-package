<?php

declare(strict_types=1);

namespace {{ camelcase (snakecase Vendor) }}\{{ camelcase (snakecase PackageName) }}\Tests;

class {{ camelcase (snakecase PackageName) }}Test extends TestCase
{
    public function test_example(): void
    {
        $this->assertTrue(true);
    }
}
